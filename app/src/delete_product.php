<?php
session_start();
include('config.php');

$id = $_GET['id'];
$action = $_GET['action'];

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
  $id = $_GET['id'];
  $query = "DELETE FROM products WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if ($result) {
    $_SESSION['message'] = 'Product deleted successfully';
    $_SESSION['message_type'] = 'danger';
    header('location: ' . $base_url . '/index.php');
  }
}
?>