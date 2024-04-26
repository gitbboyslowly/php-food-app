<?php
session_start();
include('config.php');

$id = $_GET['id'];
$action = $_GET['action'];

if (isset($_GET['action']) && $_GET['action'] == 'edit') {
  $id = $_GET['id'];
  $query = "SELECT * FROM products WHERE id = $id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
}
?>