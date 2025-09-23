-- 🔑 Key Points about INTERSECT

-- Same rules as UNION → dono queries ke:

-- Number of columns same hone chahiye

-- Column order aur datatypes compatible hone chahiye

-- Result → sirf woh rows jo dono queries me exist karti hain

-- Duplicates → automatically remove ho jaate hain (jaise UNION me hota hai).

-- 📌 Example

SELECT first_name, last_name
FROM sales.customers
INTERSECT
SELECT first_name, last_name
FROM sales.staffs
ORDER BY first_name, last_name;


-- ✅ Is query ka result:

-- Sirf woh first_name, last_name jo customers aur staffs dono tables me common hain.

-- Agar koi naam n dafa customers table me aur m dafa staff table me hai → INTERSECT bas ek hi row return karega.

-- ⚖ Difference samjho:

-- UNION → dono queries ka combined result (duplicates remove ho jate hain).

-- UNION ALL → dono queries ka combined result (duplicates bhi rahte hain).

-- INTERSECT → sirf common rows (duplicates remove ho jaate hain).

-- 👉 Ab tumhari pichhli query ka doubt (jo tumne HAVING COUNT(*) > 2 ke sath banayi thi), uske liye agar tumhe direct check karna ho ki staff aur customer me common names konse hain, to INTERSECT sabse easy tareeqa hai.