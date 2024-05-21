
<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'booking_and_reservation_db';
$conn = new mysqli($host, $user, $password);
if ($conn->connect_error) die('Database connection failed: ' . $conn->connect_error);
$query = "CREATE DATABASE IF NOT EXISTS $database";
if (!$conn->query($query)) {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

$queryCreateTable = "CREATE TABLE IF NOT EXISTS accounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    phone VARCHAR(255),
    password VARCHAR(255),
    firstname VARCHAR(255),
    middle_initial VARCHAR(255),
    lastname VARCHAR(255),
    account_no VARCHAR(255),
    address VARCHAR(500),
    profile VARCHAR(255),
    role VARCHAR(255) DEFAULT 'user',
    enable2FA VARCHAR(255) DEFAULT 'true',
    status VARCHAR(255) DEFAULT 'Active',
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if (!$conn->query($queryCreateTable)) {
    die("Error creating table: " . $conn->error);
}



$queryCreateTable = "CREATE TABLE IF NOT EXISTS room_inventory (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product VARCHAR(255),
    description VARCHAR(255),
    max_item_qty INT(11),
    available INT(11),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if (!$conn->query($queryCreateTable)) {
    die("Error creating table: " . $conn->error);
}

$queryCreateTable = "CREATE TABLE IF NOT EXISTS restaurant_inventory (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product VARCHAR(255),
    description VARCHAR(255),
    max_item_qty INT(11),
    available INT(11),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if (!$conn->query($queryCreateTable)) {
    die("Error creating table: " . $conn->error);
}




$queryCreateTable = "CREATE TABLE IF NOT EXISTS rooms_and_venues (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255),
    room_venue_type VARCHAR(255),
    status VARCHAR(255),
    max_capacity INT(11),
    price INT(11),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if (!$conn->query($queryCreateTable)) {
    die("Error creating table: " . $conn->error);
}


$queryCreateTable = "CREATE TABLE IF NOT EXISTS reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    review VARCHAR(1000),
    account_no VARCHAR(100),
    review_for VARCHAR(100),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if (!$conn->query($queryCreateTable)) {
    die("Error creating table: " . $conn->error);
}
