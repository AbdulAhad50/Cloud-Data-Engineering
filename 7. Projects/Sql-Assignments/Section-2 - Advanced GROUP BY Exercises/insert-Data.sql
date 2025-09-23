INSERT INTO sportsclub_schema.runner (id, name, main_distance, age, is_female) VALUES
(1, 'Ali Khan', 5000, 25, FALSE),
(2, 'Sara Ahmed', 10000, 28, TRUE),
(3, 'Bilal Malik', 21097, 35, FALSE),   -- half marathon
(4, 'Ayesha Shaikh', 42195, 32, TRUE), -- marathon
(5, 'Omar Raza', 10000, 40, FALSE);

--

INSERT INTO sportsclub_schema.event (id, name, start_date, city) VALUES
(1, 'London Marathon', '2025-04-21', 'London'),
(2, 'Warsaw Runs', '2025-05-15', 'Warsaw'),
(3, 'New Year Run', '2025-01-01', 'Karachi'),
(4, 'Lahore Mini Marathon', '2025-06-10', 'Lahore');


--

INSERT INTO sportsclub_schema.runner_event (runner_id, event_id) VALUES
(1, 3),  
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 4);
