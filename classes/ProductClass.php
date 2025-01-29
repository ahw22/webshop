<?php

include 'DatabaseClass.php';
class Product extends Database
{


    public function loadAllProducts()
    {
        $stmt = $this->connect()->prepare("SELECT * FROM products");
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }
    public function loadProductById($pid)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$pid]);
        $product = $stmt->fetch();
        return $product;
    }

    public function addProductToCart($pid, $quantity)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM cartitems WHERE uid = ? AND pid = ?");
        $stmt->execute([$_SESSION["uid"], $pid]);


        if ($stmt->rowCount() > 0) {
            $ci = $stmt->fetch();
            $newQuantity = $quantity + $ci["quantity"];
            $stmt = $this->connect()->prepare("UPDATE cartitems SET quantity = ? WHERE uid = ? AND pid = ?");
            $stmt->execute([$newQuantity, $_SESSION["uid"], $pid]);
            return true;
        } else {
            $stmt = $this->connect()->prepare("INSERT INTO cartitems (uid, pid, quantity) VALUES (?,?,?)");
            $stmt->execute([$_SESSION["uid"], $pid, $quantity]);
            return true;
        }
    }

    public function loadCart() {
        $stmt = $this->connect()->prepare("SELECT ci.id AS ciid, ci.uid, ci.pid, ci.quantity, p.* FROM cartitems AS ci LEFT JOIN products AS p ON ci.pid = p.id WHERE uid = ?");
        $stmt->execute([$_SESSION["uid"]]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function updateCartItem($newQuantity, $pid) {
        $stmt = $this->connect()->prepare("UPDATE cartitems SET quantity = ? WHERE uid = ? AND pid = ?");
        $stmt->execute([$newQuantity, $_SESSION["uid"], $pid]);
        header("Refresh:0");
        exit();
    }

    public function deleteCartItem($pid) {
        $stmt = $this->connect()->prepare("DELETE FROM cartitems WHERE uid = ? AND pid = ?");
        $stmt->execute([$_SESSION["uid"], $pid]);
        header("Refresh:0");
        exit();
    }
}