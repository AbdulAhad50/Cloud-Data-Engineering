--? 🧭 Introduction to SQL Server ORDER BY clause
--? ORDER BY clause SELECT statement ka optional part hota hai. Is clause ka kaam hota hai ke query ke result set ko sort karey ek ya zyada columns ki buniyad par.


--! 📜 Syntax:


--? SELECT
--?     select_list
--? FROM
--?     table_name
--? ORDER BY 
--?     column_name | expression [ASC | DESC];


--? Explanation (Roman Urdu):

--? Sab se pehle aap ORDER BY clause mein column ka naam ya koi expression dete hain jiske mutabiq aap data ko sort karna chahte hain.

--? Agar aap multiple columns use karte hain, toh ORDER BY un rows ko pehle first column ke mutabiq sort karega, phir us sorted result ko second column ke mutabiq sort karega — aur aise hi aage.

--? Jo columns aap ORDER BY mein use karte hain, wo ya toh SELECT list mein hone chahiyein ya phir table ke columns hone chahiyein jo FROM clause mein mention hain.

--? Aapko ASC (ascending) ya DESC (descending) keywords se sorting ka order define karna hota hai.

--? ASC: chhoti se badi value tak (default)

--? DESC: badi se chhoti value tak

--? Agar aap ASC ya DESC specify nahi karte, toh SQL Server default ASC (ascending) use karta hai.

--? SQL Server NULL values ko sabse chhoti value treat karta hai — yaani sorting ke baad NULL values pehle aayengi.

--? Jab SQL Server ek SELECT statement process karta hai jisme ORDER BY clause ho, toh ORDER BY clause sabse aakhir mein process hota hai.


--! 📌 Examples
--? 1) Ek column ke mutabiq ascending order mein sort karna

SELECT
    first_name,
    last_name
FROM
    sales.customers
ORDER BY
    first_name;

--? ➡️ Yahan ASC nahi likha gaya lekin by default ascending order use hoga — yani A to Z.


SELECT
    city,
    first_name,
    last_name
FROM
    sales.customers
ORDER BY
    city,
    first_name;


--? ➡️ Pehle city ke mutabiq sort karega, agar cities same hain toh un rows ko first_name ke mutabiq sort karega.

--! 4) Multiple columns with different sort orders

SELECT
    city,
    first_name,
    last_name
FROM
    sales.customers
ORDER BY
    city DESC,
    first_name ASC;

--? ➡️ Pehle city descending order mein, phir usi group ke andar first_name ascending order mein.



--! 5) Aise column se sort karna jo SELECT list mein nahi hai

SELECT
    city,
    first_name,
    last_name
FROM
    sales.customers
ORDER BY
    state;


--? ➡️ Yahan state SELECT list mein nahi hai lekin sales.customers table mein maujood hai, is liye use kiya ja sakta hai.


--! 6) Expression ke zariye sort karna

SELECT
    first_name,
    last_name
FROM
    sales.customers
ORDER BY
    LEN(first_name) DESC;


--? ➡️ Yahan LEN() function ka use ho raha hai jo har first name ki length (characters ki tadaad) ko calculate karta hai — aur phir unki descending order mein sorting karta hai.


--! 7) Column positions (ordinal numbers) se sort karna


SELECT
    first_name,
    last_name
FROM
    sales.customers
ORDER BY
    1,
    2;

--? ➡️ Yahan 1 ka matlab first_name, aur 2 ka matlab last_name hai — lekin ye practice recommended nahi hai.

--? Kyoon?

--? Agar SELECT list change ho jaye, toh ORDER BY 1 ka matlab kuch aur ho sakta hai.

--? Is liye hamesha column names ko clearly likhna best practice hai.


--! 🔚 Summary (Khol ke samjhaawa):

--? ORDER BY use karo jab aap result ko kisi specific order mein dekhna chahte ho.

--? ASC → ascending (default), DESC → descending

--? ORDER BY mein aap columns, expressions ya even positions use kar sakte ho (lekin position ka use avoid karo).

--? ORDER BY SQL Server mein SELECT statement ka last processed part hota hai.

