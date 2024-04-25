<?php
class Product {
    private $conn;
    private $table_name = "products";

    public $product_name;
    public $product_detail;
    public $product_image;
    public $product_price;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET product_name=:product_name, product_detail=:product_detail, product_image=:product_image, product_price=:product_price";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":product_name", $this->product_name);
        $stmt->bindParam(":product_detail", $this->product_detail);
        $stmt->bindParam(":product_image", $this->product_image);
        $stmt->bindParam(":product_price", $this->product_price);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>