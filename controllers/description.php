<?php

require_once '../models/product.php';

$product = new Product();

$result = $product->productList();

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id'], ENT_QUOTES, 'utf-8');
    $detail = $product->productDetail($id);
}