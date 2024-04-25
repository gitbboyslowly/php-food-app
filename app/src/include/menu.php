<?php
$tabName = isset($_GET['tab']) ? $_GET['tab'] : 'home';
?>

<header class="d-flex justify-content-center py-3 sticky-top bg-light border-bottom shadow-sm">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a href="?tab=home" class="nav-link <?php echo $tabName == 'home' ? 'active' : '' ?>">Home</a>
    </li>
    <li class="nav-item">
      <a href="?tab=products" class="nav-link <?php echo $tabName == 'products' ? 'active' : '' ?>">Products</a>
    </li>
    <li class="nav-item">
      <a href="?tab=cart" class="nav-link <?php echo $tabName == 'cart' ? 'active' : '' ?>">Cart</a>
    </li>
  </ul>
</header>
