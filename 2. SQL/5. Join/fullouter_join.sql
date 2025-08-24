-- FULL OUTER JOIN Concept

-- INNER JOIN → Sirf matching rows dikhata hai.

-- LEFT JOIN → Left table ke saare rows dikhata hai (right table ke match ho ya na ho).

-- RIGHT JOIN → Right table ke saare rows dikhata hai (left table ke match ho ya na ho).

-- FULL OUTER JOIN → Dono ka combination hai.

-- 👉 Matlab:

-- Left table ke saare rows

-- Right table ke saare rows

-- Agar dono me match milta hai → join ho jaata hai.

-- Agar match nahi milta → jis table me record missing hai waha NULL fill hota hai.

-- 📊 Syntax
-- SELECT select_list
-- FROM T1
-- FULL OUTER JOIN T2
--    ON join_predicate;


-- Note: OUTER optional hai → FULL JOIN bhi likh sakte ho.

-- 📖 Example (Projects & Members)
-- Tables:

-- pm.projects (projects ka data)

-- pm.members (team members ka data)

Query:
SELECT 
    m.name AS member, 
    p.title AS project
FROM 
    pm.members m
FULL OUTER JOIN pm.projects p 
    ON p.id = m.project_id;


-- 🟢 Result:

-- Agar member kisi project me hai → dono values show hoti hain.

-- Agar member ka project assign nahi hai → project = NULL.

-- Agar project ke paas koi member nahi hai → member = NULL.

-- ⚡ Filtering Unmatched Rows

-- Sirf wo records dikhane ke liye jo match nahi karte (yaani ya to member bina project ke hai ya project bina member ke):

SELECT 
    m.name AS member, 
    p.title AS project
FROM 
    pm.members m
FULL OUTER JOIN pm.projects p 
    ON p.id = m.project_id
WHERE
    m.id IS NULL OR
    p.id IS NULL;


-- 👉 Output me:

-- Jack Daniel (bina project ke member)

-- "Develop Mobile Sales Platform" (bina member ka project)

-- 🎯 Real-life Use Cases

-- Employee & Department → Sare employees aur departments dikhana, chahe employee ka department assign ho ya na ho, aur chahe department empty ho.

-- Students & Courses → Sare students aur sare courses dikhana, chahe student course me enrolled ho ya na ho.

-- Customers & Orders → Sare customers + sare orders, chahe customer ne kabhi order diya ho ya na ho.

-- 🧩 Practice (Tricky Questions)

-- Customers vs Orders

-- FULL OUTER JOIN use karke dikhaiye sare customers aur sare orders ek saath.

-- Agar customer ne order nahi diya to order_id = NULL.

-- Agar order kisi customer ka nahi hai to customer_name = NULL.

-- Employees vs Projects

-- Sare employees aur projects dikhaiye.

-- Sirf un records ko filter karke lao jaha employee kisi project me assigned nahi hai ya project ke paas koi employee nahi hai.

-- Products vs Suppliers

-- Sare products aur suppliers dikhaiye.

-- Agar product ka supplier nahi hai to bhi product aaye.

-- Agar supplier ke paas product nahi hai to bhi supplier aaye.