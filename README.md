# Library Management System

# Overview
This is a simple Library Management System where users can perform CRUD operations on a collection of books.

# Setup
To run this application locally, follow these steps:

# Backend
1.	Clone this repository to your local machine.
2.	Navigate to the backend directory.
3.	Install dependencies using Composer:
```sh
composer install
```

5.	Update the following fields in the .env file with your MySQL credentials:
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=librarydb
DB_USERNAME=root
DB_PASSWORD=
```

7.	Generate the application key:
```sh
php artisan key:generate
```

9.	Run database migrations and seeders to set up the database:
```sh
php artisan migrate –seed
```

11.	Start the backend server using XAMPP:
Ensure that your XAMPP server is running.
```sh
Create database librarydb
```

13.	Start the backend server:
```sh
php artisan serve
```


# Usage
Once both the backend and frontend servers are running, you can access the application in your web browser. By default, the frontend server runs on http://localhost:8000 

# Note
Make sure your XAMPP MySQL server is running before starting the application.


