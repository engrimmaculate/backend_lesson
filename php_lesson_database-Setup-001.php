<?php

// Our Topic Today is Database Management
// In this lession we would learn :
/*
1. What is Database
2. What is SQL
3. How to create a database
4. Creating  Tables
5. Perform PHP CRUD Operation in a Database from our Web app using PHP


===== What is A Database: 
A database is an organized collection of data stored and accessed electronically.

=== What is Database Management System (DBMS)
A Database Management System (DBMS) is a software package designed to
 define, manage and control access to the database. It allows users to access the database and manipulate data.

 Examples of Database Management Systems include MySQL, SQL Server, Oracle, PostgreSQL,IBMDB,MONGODB(NOSQL),SQLite etc.
 Example of NOSQLDBMS: MONGODB, COUCHDB, 
 What is SQL:
 stands for Structured Query Language. SQL is used to communicate with the database

 SQL Statements:
 1. DML (Data Manipulation Language) - Used to manipulate the data like (INSERT, UPDATE, DELETE)
 2. DDL (Data Definition Language) - Used to define the database schema or database objects (CREATE, ALTER, DROP)
 3. DQL (Data Query Language) - Used to query or retrieve dataset (SELECT)
 4. DCL (Data Control Language) - Used to manage security and permissions(GRANT,REVOKE)
 
 Database Objects Includes :
 1. Database - A database is a collection of tables, relationships, views
 2. Tables - A table is a collection of related data entries and it stores data in rows and columns
 3. Columns - A column holds a particular category of data that is common
 4. Rows - A row contains a single record of data
 5. Primary Key - A primary key is a column that uniquely identifies each row
 6. Foreign Key - A foreign key is a column or group of columns in a relational database table that provides a link between data in a related table



 Connecting to Mysql VIA Terminal:

 mysql -h localhost -u root -p

 CREATING A DATABSE:

 CREATE DATABASE backend_db;

 To Check if Database Exists:
    SHOW DATABASES LIKE 'backend_db';
    
Set the Database (backend_db) as default:
USE backend_db;

To Check if a Table Exists in Database:
    SHOW TABLES;

CREATING TABLES:

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );
 TO CHECK TABLE EXISTS:
    SHOW TABLES LIKE 'users';

  to View the Table Structure:
  DESCRIBE users;

  INSERTING DATA:
  INSERT INTO users(name, email, password)
  VALUES('John Doe', 'john@example.com', 'password');

  INSERT INTO users(name, email, password)
  VALUES('Jane Doe', 'jane@example.com', 'password123');

  INSERT INTO users(name, email, password)
  VALUES('Mark Zuckerberg', 'mark@facebook.com','facebook123');

  INSERT INTO users(name, email, password)
  VALUES('Bill Gates','bill@microsoft.com','windows123');


TO VIEW THE DATA:
  Select all data from users table:
  SELECT * FROM users;
  To select specific columns:
    SELECT id, name, email FROM users;

    To Update a Record:
    UPDATE users
    SET name = 'Steve Jobs', email = 'steve@apple'
    WHERE id = 1;

    Delete a Record:
    DELETE FROM users WHERE id = 4;

    Performing CRUD operations With PHP:
        1. Connect to the MySQL database
        $connection = mysqli_connect("localhost", "root", "password", "backend_db");

        2. Write and Execute SQL queries:
            A. Insert Data
                $sql = "INSERT INTO users (name, email, password)
                        VALUES ('Michael Scott', 'michael@dunderm' , 'password123')";
                        if(mysqli_query($connection, $sql)){
                            echo "New record created successfully";
                        } else{
                            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                        }

            B. Select Data
                $sql = "SELECT * FROM users";
                $result = mysqli_query($connection, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"];
                    }
                    else{
                        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                    }
                }
                else{
                    echo "0 results";
                }

                // Close connection
                mysqli_close($connection);
            C. Update Data
                $sql = "UPDATE users SET name='Dwight Schrute' WHERE id=4";
                if(mysqli_query($connection, $sql)){
                    echo "Record update successfully";
                        } else{
                            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                        }
                    }
        E.  Delete Data
        $sql = "DELETE FROM users WHERE id=3";
        if(mysqli_query($connection, $sql)){
            echo "Record deleted successfully";
        } else{
            echo "Error deleting record: " . mysqli_error($connection);
        }


                

*/

?>