<?php
session_start();
// session_destroy();

require '../models/product.php';

if (isset($_POST['id'])) {
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'utf-8');
    $count = htmlspecialchars($_POST['count'], ENT_QUOTES, 'utf-8');
}

$_SESSION['product'][$id] = [
    'count' => $count
];

// print_r($_SESSION['product']);

$product = new Product();
$result = $product->productMultiList($_SESSION['product']);
$totalCost = 0;

foreach($_SESSION['product'] as $id => $val) {
    for($i = 0; $i < count($result); $i++) {
        if($id == $result[$i]['id']) {
            $result[$i]['count'] = $val['count'];

            $totalCost += $result[$i]['price'] * $result[$i]['count'];
        }
    }
}