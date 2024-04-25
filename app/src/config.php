<?php
// var base_url
$base_url = "http://localhost:8080";

// var database
$host = "db";
$database = "php-food-app";
$username = "user";
$password = "password";

// connect to database
$conn = new mysqli($host, $username, $password, $database) or die("Connection failed: %s\n" . $conn->error);
