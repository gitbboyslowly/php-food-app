<?php
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
  <link href="<?php echo $base_url ?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="<?php echo $base_url ?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="<?php echo $base_url ?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">
  <?php include('include/menu.php'); ?>
  <?php
  if ($tabName == 'home') {
    include('home.php');
  } else if ($tabName == 'products') {
    include('product_list.php');
  } else if ($tabName == 'cart') {
    include('cart.php');
  }
  ?>
  <script src="<?php echo $base_url ?>/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>