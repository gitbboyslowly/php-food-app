<div class="container m-5">
  <h4>Add Product</h4>
  <div class="row g-5">
    <div class="col-md-8 col-sm-12">
      <!-- insert form -->
      <form action="<?php echo $base_url ?>/index.php?tab=products" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="product_name">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="product_detail"></textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" id="price" name="product_price">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input type="file" class="form-control" id="image" name="product_image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>

<?php
require('/var/www/html/database/database.php');

$database = new Database();
$db = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data from form
    $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    $product_detail = isset($_POST['product_detail']) ? $_POST['product_detail'] : '';
    $product_price = isset($_POST['product_price']) && is_numeric($_POST['product_price']) ? $_POST['product_price'] : 0;
    $product_image = isset($_FILES['product_image']['name']) ? $_FILES['product_image']['name'] : '';

    // insert data to database
    $query = "INSERT INTO products (product_name, product_detail, product_price, product_image) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $result = $stmt->execute([$product_name, $product_detail, $product_price, $product_image]);

    if ($result) {
      echo "Product added successfully";
    } else {
      echo "Failed to add product";
    }
}
?>