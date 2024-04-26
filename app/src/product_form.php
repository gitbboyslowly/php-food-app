<?php
session_start();
include('config.php');

$product_name = trim($_POST['product_name']);
$price = trim($_POST['price']);
$detail = trim($_POST['detail']);
$product_image = $_FILES['product_image']['name'];

$product_image_tmp = $_FILES['product_image']['tmp_name'];
$upload_dir = 'assets/upload_image/';
$image_location = $upload_dir . $product_image;

$query = "INSERT INTO products (product_name, price, detail, product_image) VALUES ('$product_name', '$price', '$detail', '$product_image')" or die('query failed');

if ($query) {
  move_uploaded_file($product_image_tmp, $image_location);
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $_SESSION['message_type'] = 'success';
  $_SESSION['message'] = 'Product added successfully';
  header('location: ' . $base_url . '/index.php');
} else {
  $_SESSION['message_type'] = 'danger';
  $_SESSION['message'] = 'Product added failed';
  header('location: ' . $base_url . '/index.php');
}
?>