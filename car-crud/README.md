# 🚗 Car CRUD Management System

A simple and professional **Car Management System** built with **PHP, MySQL, HTML, and XAMPP**.
This project demonstrates complete **CRUD (Create, Read, Update, Delete)** operations with server-side validation and MySQL database integration.

## ✨ Features

* ➕ Add new car records
* 📋 Display all car records
* ✏️ Edit/update existing car records
* 🗑️ Delete car records with confirmation
* ✅ Server-side form validation
* 🔒 Prepared statements for database operations
* 🛡️ HTML output escaping using `htmlspecialchars()`
* 🔄 Success and error messages
* 📅 Dynamic car-year selection
* 📊 MySQL database integration

## 🛠️ Technologies Used

* **PHP**
* **MySQL**
* **HTML5**
* **XAMPP**
* **phpMyAdmin**

## 📁 Project Structure

```text
car-crud/
│
├── connect.php       # Database connection
├── index.php         # CRUD operations and user interface
└── README.md         # Project documentation
```

## 🗄️ Database Structure

**Database:** `car_db`

**Table:** `car_table`

| Column  | Type         | Description                 |
| ------- | ------------ | --------------------------- |
| `carid` | INT          | Primary key, Auto Increment |
| `name`  | VARCHAR(100) | Car name                    |
| `model` | VARCHAR(100) | Car model                   |
| `year`  | INT          | Manufacturing year          |
| `price` | INT          | Car price                   |

### SQL Setup

```sql
CREATE DATABASE car_db;

USE car_db;

CREATE TABLE car_table (
    carid INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    year INT NOT NULL,
    price INT NOT NULL
);
```

## ⚙️ Installation & Setup

### 1. Install XAMPP

Download and install XAMPP with **Apache** and **MySQL**.

### 2. Clone the Repository

```bash
git clone https://github.com/yashmahajancd/car-crud.git
```

Or place the project directly inside:

```text
C:\xampp\htdocs\
```

### 3. Start XAMPP

Start:

* Apache
* MySQL

> This project uses MySQL on port **3307** in the current XAMPP configuration.

### 4. Create the Database

Open phpMyAdmin:

```text
http://localhost:8080/phpmyadmin
```

Create the `car_db` database and `car_table` using the SQL provided above.

### 5. Configure Database Connection

Update `connect.php` according to your MySQL configuration:

```php
<?php

$con = mysqli_connect("localhost", "root", "", "car_db", 3307);

if(!$con)
{
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>
```

### 6. Run the Project

Open:

```text
http://localhost:8080/wfs-practical/car-crud/
```

## 🔄 CRUD Workflow

```text
User
 │
 ▼
Car CRUD Interface
 │
 ├── Create ──► INSERT
 │
 ├── Read ────► SELECT
 │
 ├── Update ──► UPDATE
 │
 └── Delete ──► DELETE
 │
 ▼
MySQL Database
```

## 🔐 Validation & Security

The project includes:

* Prepared statements using `mysqli_prepare()`
* Parameter binding using `mysqli_stmt_bind_param()`
* Input validation for numeric fields
* Required-field validation
* Price validation
* Output escaping using `htmlspecialchars()`
* Delete confirmation before removing records

## 📸 Application Flow

**Insert:** Enter car details → Click **Insert** → Record is stored in MySQL.

**Read:** All available car records are displayed in the table.

**Update:** Click **EDIT** → Modify details → Click **Update**.

**Delete:** Click **DELETE** → Confirm deletion → Record is removed.

## 🎯 Learning Objectives

This project was developed to practice:

* PHP form handling
* PHP & MySQL connectivity
* CRUD operations
* SQL queries
* Prepared statements
* Server-side validation
* Database management using phpMyAdmin
* Basic web application development

## 👨‍💻 Author

**Yash Mahajan**

Built as a PHP & MySQL CRUD project for practical web development learning.

---

⭐ If you found this project useful, consider giving the repository a star!
