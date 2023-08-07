<?php
require_once '../controllers/cart.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ショッピングカートのページです。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショッピングカート</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <h1 class="heading">ショッピングカート</h1>
    <table class="table-layout">
        <tr>
            <th>商品名</th>
            <th>金額</th>
            <th>数量</th>
        </tr>

        <?php foreach($result as $data): ?>

        <tr>
            <td><?= $data['name']; ?></td>
            <td><?= $data['price']; ?>円（税込）</td>
            <td>1個</td>            
        </tr>

        <?php endforeach; ?>
        
        <tr>
            <td colspan="3" class="item-price">
                合計：<?= $totalCost; ?>円（税込）
            </td>
        </tr>
    </table>

    <form action="">
        <p>
            氏名：<input type="text">
        </p>
        <p>
            住所：<input type="text">
        </p>
        <p>
            メールアドレス：<input type="mail">
        </p>
        <p>
            電話番号：<input type="tel">
        </p>
        <p>
            <button type="submit">確認画面へ</button>
        </p>
    </form>

</div>

</body>

</html>