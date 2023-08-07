<?php

require_once '../models/product.php';

$product = new Product();

$result = $product->productList();
