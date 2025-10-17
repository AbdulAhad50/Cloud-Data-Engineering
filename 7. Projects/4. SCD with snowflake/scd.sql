use role sysadmin;
create warehouse if not exists COMPUTE_WH with warehouse_size = 'XSMALL' auto_suspend = 120;

create database if not exists scd_demo;
use database scd_demo;
create schema if not exists scd2;
use schema scd2;
show tables;

create or replace table customer (
     customer_id number,
     first_name varchar,
     last_name varchar,
     email varchar,
     street varchar,
     city varchar,
     state varchar,
     country varchar,
     update_timestamp timestamp_ntz default current_timestamp());

create or replace table customer_history (
     customer_id number,
     first_name varchar,
     last_name varchar,
     email varchar,
     street varchar,
     city varchar,
     state varchar,
     country varchar,
     start_time timestamp_ntz default current_timestamp(),
     end_time timestamp_ntz default current_timestamp(),
     is_current boolean
     );
     
create or replace table customer_raw (
     customer_id number,
     first_name varchar,
     last_name varchar,
     email varchar,
     street varchar,
     city varchar,
     state varchar,
     country varchar);
     
create or replace stream customer_table_changes on table customer;

select * from customer_raw

----------------------------------------------------------------------------


CREATE OR REPLACE FILE FORMAT customer_ext_stage_format
    TYPE= 'CSV'
    FIELD_DELIMITER=','
    SKIP_HEADER=1;




create or replace stage customer_ext_stage
  url='s3://data-flow-ahad/'
  credentials=(aws_key_id='AKIAYC6DLTQ2B5THY6WL' aws_secret_key='UM3cCzoGTKWgA6RxSPOKDm0kEQBFUFufuTvO5Ak9')
  file_format = customer_ext_stage_format;
  
show stages;
list @customer_ext_stage;

-- No USE
create or replace pipe customer_s3_pipe
  auto_ingest = true
  as
  copy into customer_raw
  from @customer_ext_stage/customer_20210806183233.csv
  file_format = CSV
  ;

---

CREATE OR REPLACE PIPE customer_s3_pipe
  AUTO_INGEST = TRUE
  AS
  COPY INTO customer_raw
  FROM @customer_ext_stage
  FILE_FORMAT = (FORMAT_NAME = customer_ext_stage_format)
  PATTERN = '.*customer_.*\\.csv';


show pipes;
select SYSTEM$PIPE_STATUS('customer_s3_pipe');

select count(*) from customer_raw;