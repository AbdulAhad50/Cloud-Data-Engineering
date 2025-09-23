SELECT 
    main.name AS category,
    sub.name AS subcategory
FROM sportswear_schema.category main
LEFT JOIN sportswear_schema.category sub 
    ON sub.parent_id = main.id
WHERE main.parent_id IS NULL;
