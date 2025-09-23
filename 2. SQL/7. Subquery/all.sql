-- 🔑 Key Concept of ALL

-- ALL operator ka matlab hai:
-- 👉 Condition tabhi TRUE hogi jab woh subquery se aane wali saari values ke liye TRUE ho.

-- Agar ek bhi value FALSE de deti hai → pura condition FALSE ho jata hai.

-- 1️⃣ Example: > ALL
SELECT product_name, list_price
FROM production.products
WHERE list_price > ALL (
    SELECT AVG(list_price)
    FROM production.products
    GROUP BY brand_id
);


-- 👉 Matlab:

-- Product ka list_price har ek brand ke average price se zyada hona chahiye.

-- Agar ek bhi brand ka average price bada nikla aur product ka price usse chhota hua → wo product include nahi hoga.

-- Yani result mein sirf sabse expensive products ayenge jo sab brands ke average se bhi upar hain.

-- 2️⃣ Example: < ALL
SELECT product_name, list_price
FROM production.products
WHERE list_price < ALL (
    SELECT AVG(list_price)
    FROM production.products
    GROUP BY brand_id
);


-- 👉 Matlab:

-- Product ka list_price har ek brand ke average price se kam hona chahiye.

-- Yani result mein sabse cheap products ayenge jo sab brands ke average se bhi niche hain.

-- ⚖️ Difference between ANY vs ALL
-- Operator	TRUE kab hoga?
-- ANY	Agar ek bhi comparison TRUE ho gaya toh condition TRUE ✅
-- ALL	Jab tak saari comparisons TRUE na ho jaayein, tab tak FALSE ❌
-- 💡 Example difference:

-- price > ANY (subquery) → price sirf ek bhi value se bada ho toh chalega.

-- price > ALL (subquery) → price ko sabhi values se bada hona zaroori hai.