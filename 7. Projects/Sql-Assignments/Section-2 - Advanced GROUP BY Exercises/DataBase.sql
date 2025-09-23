CREATE DATABASE sportsclub_db;

CREATE SCHEMA sportsclub_schema;



-- Runner Table

CREATE TABLE sportsclub_schema.runner (
    id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    main_distance INT NOT NULL,   -- meters
    age INT CHECK (age > 0),
    is_female BOOLEAN NOT NULL
);


-- Event Table

CREATE TABLE sportsclub_schema.event (
    id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    start_date DATE NOT NULL,
    city VARCHAR(100) NOT NULL
);


-- Runner Event

CREATE TABLE sportsclub_schema.runner_event (
    runner_id INT,
    event_id INT,
    PRIMARY KEY (runner_id, event_id),
    FOREIGN KEY (runner_id) REFERENCES sportsclub_schema.runner(id),
    FOREIGN KEY (event_id) REFERENCES sportsclub_schema.event(id)
);
