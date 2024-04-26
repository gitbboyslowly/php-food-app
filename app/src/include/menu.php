<?php
// $tabName = isset($_GET['tab']) ? $_GET['tab'] : 'home';
?>

<header class="d-flex justify-content-center py-3 sticky-top bg-light border-bottom shadow-sm">
  <ul class="nav nav-pills">
    <!-- <li class="nav-item">
      <a href="?tab=home" class="nav-link <?php echo $tabName == 'home' ? 'active' : '' ?>">Home</a>
    </li>
    <li class="nav-item">
      <a href="?tab=products" class="nav-link <?php echo $tabName == 'products' ? 'active' : '' ?>">Products</a>
    </li>
    <li class="nav-item">
      <a href="?tab=add_product" class="nav-link <?php echo $tabName == 'add_product' ? 'active' : '' ?>">Add Product</a>
    <li class="nav-item">
      <a href="?tab=cart" class="nav-link <?php echo $tabName == 'cart' ? 'active' : '' ?>">Cart</a>
    </li> -->
    <li class="nav-item">
      <a href="<?php $base_url ?>" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
      <a href="<?php $base_url ?>/product_list" class="nav-link">Products</a>
    </li>
    <li class="nav-item">
      <a href="<?php $base_url ?>/cart" class="nav-link">Cart</a>
    </li>
  </ul>
</header>
