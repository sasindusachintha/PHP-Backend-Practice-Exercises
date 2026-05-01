# Question 1 — Database Design (10 Marks)

## 🗄️ Task
Design a MySQL database named **`student_db`**.

---

## 📋 Requirements

### 1. Create Table
Create a table named **`students`** with the following fields:

- `student_id`
- `first_name`
- `last_name`
- `email`
- `phone`
- `address`
- `dob`
- `gender`
- `course`
- `admission_date`

---

### 2. Define Constraints
Apply appropriate data types and constraints such as:

- `PRIMARY KEY`
- `NOT NULL`
- `UNIQUE`
- `AUTO_INCREMENT` (if needed)

---

### 3. Insert Sample Data
Insert at least **3 student records** into the table.

---

## 📸 Required Screenshots

Attach the following screenshots:

1. **Database creation script**

![Screenshot](../ss/1%20(3).png)

3. **Table structure (students table)**

![Screenshot](../ss/1%20(4).png)

5. **Sample data view in phpMyAdmin**

![Screenshot](../ss/1%20(2).png)


![Screenshot](../ss/1%20(1).png)

---

# Question 2 — Identify HTTP Requests (5 Marks)

## 🌐 Task
Identify which HTTP request methods should be used for the following operations:

---

## 📋 Requirements

1. **Adding a student**  
2. **Viewing all students**  
3. **Updating student details**  
4. **Deleting a student**  

---

## 🧠 Explanation

- **POST** → Used to create new data (add student)  
- **GET** → Used to retrieve data (view students)  
- **PUT / PATCH** → Used to update existing data  
- PUT → full update  
- PATCH → partial update  
- **DELETE** → Used to remove data  

---

## 📸 Required Screenshot

## 📊 Answer Table

| Action                    | HTTP Method |
|--------------------------|------------|
| Add a student            | POST       |
| View all students        | GET        |
| Update student details   | PUT / PATCH|
| Delete a student         | DELETE     |

---
