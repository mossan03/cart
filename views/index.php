<?php require_once '../controllers/index.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="おすすめアイテムが格安のショッピングサイトです。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショッピングカート</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="heading">商品一覧</h1>
        <ul class="flex_box item_wrapper">
            <?php foreach($result as $data): ?>
            <li>
                <div class="item_outer">
                    <a href="description.php?id=<?= $data['id']; ?>">
                        <p class="thumbnail"><img src="images/<?= $data['image']; ?>" alt="商品1の画像"></p>
                        <p class="item-name"><?= $data['name']; ?></p>
                        <p class="item-price">￥<?= $data['price']; ?>(税込)</p>
                    </a>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>