SELECT 
    main_distance, 
    COUNT(*) AS runners_number
FROM runnersz
GROUP BY main_distance
HAVING COUNT(*) > 3;
