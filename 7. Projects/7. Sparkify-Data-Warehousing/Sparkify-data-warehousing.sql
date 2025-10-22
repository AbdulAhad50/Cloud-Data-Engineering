create DATABASE Sparkify_Data;

use database Sparkify_Data;

create SCHEMA SPARKIFY_STAGING;

USE SCHEMA SPARKIFY_STAGING;



CREATE TABLE SONGPLAYS(
    SONGPLAY_ID INT,
    START_TIME BIGINT,
    USER_ID INT,
    LEVEL VARCHAR,
    SONG_ID VARCHAR,
    ARTIST_ID VARCHAR,
    SESSION_ID INT,
    LOCATION VARCHAR,
    USER_AGENT VARCHAR
);

CREATE TABLE TIME(
    START_TIME BIGINT,
    HOUR INT,
    DAY INT,
    WEEK INT,
    MONTH INT,
    YEAR INT,
    WEEKDAY INT
);

CREATE OR REPLACE TABLE USERS(
    USER_ID VARCHAR,
    FIRST_NAME VARCHAR,
    LAST_NAME VARCHAR,
    GENDER VARCHAR,
    LEVEL VARCHAR
);

CREATE TABLE SONGS(
    SONG_ID VARCHAR,
    TITLE VARCHAR,
    ARTIST_ID VARCHAR,
    YEAR INT,
    DURATION FLOAT
);

CREATE TABLE ARTISTS(
    ARTIST_ID VARCHAR,
    NAME VARCHAR,
    LOCATION VARCHAR,
    LATITUDE FLOAT,
    LONGITUDE FLOAT
);




create stage SPARKIFY_STAGING.staging


create or replace file format jsonformat type='JSON' strip_outer_array=true;

-- Create a stage for JSON files using the defined format
create or replace stage json_stage_log_data file_format = jsonformat;



CREATE OR REPLACE STAGE json_stage_song_data
  URL = 's3://sparkify-data-warehousing-abdulahad50/song_data/'
  CREDENTIALS = (AWS_KEY_ID ='' AWS_SECRET_KEY ='')
  FILE_FORMAT = jsonformat;

CREATE OR REPLACE STAGE json_stage_log_data
  URL = 's3://sparkify-data-warehousing-abdulahad50/log_data/'
  CREDENTIALS = (AWS_KEY_ID ='' AWS_SECRET_KEY ='')
  FILE_FORMAT = jsonformat;

list @json_stage_log_data;


CREATE OR REPLACE TABLE staging_songs (
  data VARIANT
);

CREATE OR REPLACE TABLE staging_log_events (
  data VARIANT
);



COPY INTO staging_log_events
FROM @json_stage_log_data
FILE_FORMAT = (FORMAT_NAME = jsonformat);

COPY INTO staging_songs
from @json_stage_song_data
FILE_FORMAT = (FORMAT_NAME = jsonformat)


select * from staging_log_events
select * from staging_songs


INSERT INTO SONGPLAYS (
  SONG_ID,
  ARTIST_ID,
  USER_ID,
  LEVEL,
  SESSION_ID,
  LOCATION,
  USER_AGENT
)
SELECT *  FROM (
  SELECT 
    data:song_id::varchar,
    data:artist_id::varchar,
    NULL AS user_id,
    NULL AS level,
    NULL AS session_id,
    NULL AS location,
    NULL AS user_agent
  FROM staging_songs

  UNION

  SELECT 
    data:song_id::varchar,
    data:artist_id::varchar,
    data:userId::VARCHAR,
    data:level::varchar AS level,
    data:session_id::int AS session_id,
    data:location::varchar AS location,
    data:user_agent::varchar AS user_agent
  FROM staging_events
);



INSERT INTO ARTISTS(
    ARTIST_ID ,
    NAME,
    LOCATION ,
    LATITUDE ,
    LONGITUDE
)
SELECT 
  data:artist_id::varchar,
  data:artist_name::varchar,
  data:artist_location::varchar,
  data:artist_latitude::float,
  data:artist_longitude::float,
FROM staging_songs;


INSERT INTO USERS (
    USER_ID,
    FIRST_NAME,
    LAST_NAME,
    GENDER,
    LEVEL
)
SELECT 
    data:userId::VARCHAR,
    data:firstName::VARCHAR,
    data:lastName::VARCHAR,
    data:gender::VARCHAR,
    data:level::VARCHAR
FROM staging_log_events;


INSERT INTO SONGS(
    SONG_ID,
    TITLE,
    ARTIST_ID,
    YEAR,
    DURATION
)
select 
    data:song_id::VARCHAR,
    data:title::VARCHAR,
    data:artist_id::VARCHAR,
    data:year::INT,
    data:duration::FLOAT
from staging_songs;
    
    
    



select * from SONGPLAYS
ORDER BY ARTIST_ID

select * from ARTISTS
select * from USERS
select * from SONGS






