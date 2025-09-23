SELECT 
    main_distance, 
    COUNT(*) AS runners_number
FROM runners
GROUP BY main_distance
HAVING COUNT(*) > 3;
