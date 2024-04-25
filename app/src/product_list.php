<div class="container m-5">
  <h4>Manage Product</h4>
  <div class="row g-5">
    <div class="col-md-8 col-sm-12">
      <!-- insert form -->
      <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>

<?php
// put product to database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $path = 'uploads/' . $image;

  move_uploaded_file($tmp_name, $path);

  $sql = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$description', '$price', '$path')";
  $conn->query($sql);
}
?>