<!DOCTYPE html>
<html>

<head>
  <title>Add Product</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h2>Add Product</h2>
    <div class="row g-5">
      <div class="col-mb-8 col-sm-12">
        <form action="<?php echo $base_url ?>/product_form.php" method="post" enctype="multipart/form-data">
          <div class="row g3 mb3">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="product_price">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="product_detail">Detail</label>
                <textarea class="form-control" id="detail" name="detail" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" class="form-control-file" id="product_image" name="product_image" accept="image/png, image/jpg, image/jpeg">
              </div>
            </div>
            <div class="col-sm-6">
              <button type="submit" class="btn btn-primary">
                <i class="fa-regular fa-floppy-disk me-1"></i>Create
              </button>
            </div>
            <hr class="my-4">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Your PHP code here -->

  <!-- <script>
    var message = "<?php echo $message; ?>";
    if (message !== '') {
      alert(message);
    }
  </script> -->

  <!-- Include Bootstrap JS and jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
</body>
</html>

<?php
// require('/var/www/html/database/database.php');

// $database = new Database();
// $db = $database->getConnection();

// $message = '';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // get data from form
//   $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
//   $product_detail = isset($_POST['product_detail']) ? $_POST['product_detail'] : '';
//   $product_price = isset($_POST['product_price']) && is_numeric($_POST['product_price']) ? $_POST['product_price'] : 0;
//   $product_image = isset($_FILES['product_image']['name']) ? $_FILES['product_image']['name'] : '';

//   // insert data to database
//   $query = "INSERT INTO products (product_name, product_detail, product_price, product_image) VALUES (?, ?, ?, ?)";
//   $stmt = $db->prepare($query);
//   $result = $stmt->execute([$product_name, $product_detail, $product_price, $product_image]);

//   if ($result) {
//     $message = "Product added successfully";
//   } else {
//     $message = "Failed to add product";
//   }
// }
?>