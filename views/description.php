<?php
require_once '../controllers/description.php';


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="商品の詳細ページです。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    
    <main>
        <h1 class="heading">商品詳細</h1>
        <div class="flex_box">
            <div class="main-area">
                <p class="thumbnail">
                    <img src="images/<?= $detail['image']; ?>" alt="">
                </p>
                <p><?= $detail['description']; ?></p>
            </div>
            <div class="sub-area">
                <form action="cart.php" method="post" class="select-area">
                    <input type="hidden" name="id" value="<?= $detail['id']; ?>">
                    <p class="item-name"><?= $detail['name']; ?></p>
                    <p class="item-price">￥<?= $detail['price']; ?>(税込)</p>
                    <p>
                        <select name="count">
                            <?php
                            for ($i=1; $i <= 10; $i++) {
                                echo '<option value="'. $i. '">'. $i. '</option>';
                            }
                            ?>
                        </select>個
                    </p>
                    <p>
                        <input type="submit" value="カートに入れる">
                    </p>
                </form>
            </div>
        </div>
    </main>

    <section class="container">
        <h1 class="heading">商品一覧</h1>
        <ul class="flex_box item_wrapper">
            <?php foreach($result as $data): ?>
            <li>
                <div class="item_outer">
                    <a href="">
                        <p class="thumbnail"><img src="images/<?= $data['image']; ?>" alt="商品1の画像"></p>
                        <p class="item-name"><?= $data['name']; ?></p>
                        <p class="item-price">￥<?= $data['price']; ?>(税込)</p>
                    </a>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>

</div>

</body>

</html>