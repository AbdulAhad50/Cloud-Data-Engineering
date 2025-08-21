--! 🔹 WHERE Clause – Detail Explanation

--? Kya hai?

--? WHERE clause ka use query ke output rows ko filter karne ke liye hota hai.

--? Jo condition tum lagate ho (search_condition), woh TRUE return kare to hi row output me aati hai.


-- Kyun use karte hain?

-- Jab hume saare records nahi chahiye, sirf kuch specific conditions wale records chahiye.

-- Example: Sirf CA state ke customers, ya sirf 2018 ke products.

-- Kahan use hota hai (Scenarios):

-- Data filtering (location, year, price, status, etc.)

-- Aggregation se pehle filtering (group by lagane se pehle rows kam karna)

-- Large datasets me performance improve karne ke liye.

-- Faide (Advantages):

-- Unwanted data remove hota hai → fast query execution.

-- Specific business reports generate karna easy hota hai.

--! Nuksaan (Disadvantages):

-- Agar galat condition likhi to data missing ya wrong result aa sakta hai.

-- NULL values ke case me dikkat ho sakti hai (kyunki WHERE clause NULL ko FALSE treat karta hai).

SELECT first_name, last_name, city, state
FROM sales.customers
WHERE state = 'CA';


--! 👉 Ye query sirf unhi customers ko return karegi jinki state = 'CA' hai.

-- Question (WHERE Clause)

-- Maan lo tumhe New York (NY) ke customers chahiye jo Albany city me rehte hain.


SELECT first_name, last_name, city, state
FROM sales.customers
WHERE state = 'NY' AND city = 'Albany';



--! Question (tum solve karoge 👇)

--? 👉 Tumhe sales.customers table se un customers ki list chahiye jinke state = 'CA' aur city = 'Los Angeles' hai. Lekin tumhe sirf first_name, last_name aur email dikhana hai.