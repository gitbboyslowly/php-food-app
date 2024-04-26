<?php
session_start();
// require('/var/www/html/config.php');
include('config.php');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Food App</title>
  <link href="<?php echo $base_url ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $base_url ?>/assets/css/alert.css" rel="stylesheet">
  <link href="<?php echo $base_url ?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="<?php echo $base_url ?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="<?php echo $base_url ?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">
  <?php include('include/menu.php'); ?>

  <script>
    var message = "<?php echo $_SESSION['message'] ?? ''; ?>";
    var messageType = "<?php echo $_SESSION['message_type'] ?? ''; ?>";
  </script>

  <?php
  unset($_SESSION['message']);
  unset($_SESSION['message_type']);
  ?>
  <div class="d-flex flex-col justify-content-center m-5">

    <?php
    // if ($tabName == 'home') {
    //   include('home.php');
    // } else if ($tabName == 'products') {
    // include('product_list.php');
    // } else if ($tabName == 'add_product') {
    // include('add_product.php');
    // } else if ($tabName == 'cart') {
    //   include('cart.php');
    // }
    ?>


    <div id="addProductModal" class="modal">
      <div class="modal-add-product">
        <span class="close" id="addProductClose">&times;</span>
        <?php include('add_product.php'); ?>
      </div>
    </div>

    <div id="alertModal" class="modal">
      <div class="modal-alert">
        <span class="close" id="alertClose">&times;</span>
        <p id="alertMessage"></p>
      </div>
    </div>
    <div class="col-12">
      <div class="d-flex flex-col justify-content-end mb-3">
        <button class="btn btn-outline-secondary" id="addProductButton">Add Product</button>
      </div>
      <?php include('product_list.php'); ?>
    </div>
  </div>

  <script src="<?php echo $base_url ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $base_url ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo $base_url ?>/assets/js/popup.js"></script>
</body>

</html>