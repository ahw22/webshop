<?php

include 'DatabaseClass.php';
class Product extends Database {


    public function loadAllProducts() {
        $stmt = $this->connect()->prepare("SELECT * FROM products");
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }
    public function loadProductById($pid) {
        $stmt = $this->connect()->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$pid]);
        $product = $stmt->fetch();
        return $product;
    }

}