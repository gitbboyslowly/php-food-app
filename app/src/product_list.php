<script src="/assets/js/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("#loadButton").click(function() {
      if ($("#content").is(":visible")) {
        $("#content").hide();
      } else {
        $("#content").load("add_product.php", function() {
          $("#content").show();
        });
      }
    });
  });
</script>

<button id="loadButton" class="btn btn-primary">Add Product</button>
<div id="content" style="display: none;"></div>