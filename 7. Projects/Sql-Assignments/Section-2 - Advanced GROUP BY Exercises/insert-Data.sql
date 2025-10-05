-- SQL Server:
CREATE SCHEMA sportsclubs;
GO



CREATE TABLE sportsclubs.runner (
    id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    main_distance INT NOT NULL,   -- meters
    age INT CHECK (age > 0),
    is_female BIT
);


-- Event Table

CREATE TABLE sportsclubs.event (
    id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    start_date DATE NOT NULL,
    city VARCHAR(100) NOT NULL
);


-- Runner Event

CREATE TABLE sportsclubs.runner_event (
    runner_id INT,
    event_id INT,
    PRIMARY KEY (runner_id, event_id),
    FOREIGN KEY (runner_id) REFERENCES sportsclubs.runner(id),
    FOREIGN KEY (event_id) REFERENCES sportsclubs.event(id)
);





INSERT INTO sportsclubs.runner (id, name, main_distance, age, is_female) VALUES
(1, 'Ali Khan', 5000, 25, 'False'),
(2, 'Sara Ahmed', 10000, 28, 'TRUE'),
(3, 'Bilal Malik', 21097, 35, 'FALSE'), 
(4, 'Ayesha Shaikh', 42195, 32, 'TRUE'),
(5, 'Omar Raza', 10000, 40, 'FALSE');

--

INSERT INTO sportsclubs.event (id, name, start_date, city) VALUES
(1, 'London Marathon', '2025-04-21', 'London'),
(2, 'Warsaw Runs', '2025-05-15', 'Warsaw'),
(3, 'New Year Run', '2025-01-01', 'Karachi'),
(4, 'Lahore Mini Marathon', '2025-06-10', 'Lahore');


--

INSERT INTO sportsclubs.runner_event (runner_id, event_id) VALUES
(1, 3),  
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 4);
