<?php
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
$num_rows = mysqli_num_rows($result);
?>

<div class="row">
  <div class="col-12">
    <?php
    if ($num_rows > 0) {
    ?>
      <table class="table table-bordered border-info">
        <thead>
          <tr>
            <th style="width: 100px">Image</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Details</th>
            <th style="width: 200px">Action</th>
          </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tbody>
            <tr>
              <td>
                <?php
                if (!$row['product_image']) { ?>
                  No Image
                <?php
                } else {
                ?>
                  <img src="<?php echo $base_url . '/assets/upload_image/' . $row['product_image'] ?>" alt="" style="width: 100px">
                <?php } ?>
              </td>
              <td><?php echo $row['product_name'] ?></td>
              <td><?php echo number_format($row['price'], 2) ?></td>
              <td><?php echo $row['detail'] ?></td>
              <td>
                <!-- <a class="btn btn-outline-secondary" href="<?php echo $base_url . '/index.php?id=' . $row['id'] . '&action=edit' ?>">Edit</a> -->
                <button class="btn btn-outline-secondary editButton" data-id="<?php echo $product['id']; ?>">Edit</button>
                <a class="btn btn-outline-danger" href="<?php echo $base_url . '/delete_product.php?id=' . $row['id'] . '&action=delete' ?>" onclick="return confirmDelete('<?php echo $base_url . '/index.php?id=' . $row['id'] . '&action=delete' ?>')">Delete</a>
              </td>
            </tr>
          </tbody>
        <?php } ?>
      </table>
    <?php } else { ?>
      <div>
        <h1 class="text-center">No data found</h1>
      </div>
    <?php } ?>
  </div>
</div>

<script>
  function confirmDelete(url) {
    if (confirm("Are you sure you want to delete this product?")) {
      window.location.href = url;
    }
  }

  $(document).ready(function() {
    $('.editButton').click(function() {
      var productId = $(this).data('id');

      $.ajax({
        url: 'add_product.php',
        type: 'GET',
        data: {
          id: productId
        },
        success: function(response) {
          $('.modal-add-product').html(response);
          $('#addProductModal').show();
        }
      });
    });

    $('#addProductClose').click(function() {
      $('#addProductModal').hide();
    });
  });
</script>

<?php
// edit product
if (isset($_GET['action']) && $_GET['action'] == 'edit') {
  $id = $_GET['id'];
  $query = "SELECT * FROM products WHERE id = $id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
}
?>