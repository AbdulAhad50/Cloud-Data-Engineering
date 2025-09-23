SELECT 
    e.name AS event_name,
    COUNT(re.runner_id) AS runner_count
FROM sportsclub_schema.event e
LEFT JOIN sportsclub_schema.runner_event re
    ON e.id = re.event_id
GROUP BY e.name
ORDER BY e.name;
