<div>
    <img src="<?= IMG_DIR . 'catalog_img/' . $goods_item['goods_img'] ?>" alt="#">
    <h3><?= $goods_item['goods_name']; ?></h3>
    <p>Цена: <?= $goods_item['goods_price']; ?></p>
    <h3>Описание:</h3>
    <p><?= $goods_item['goods_description']; ?></p>
    <h3>Отзывы:</h3>
    <? foreach ($feedbacks as $value): ?>
        <p><?= $value['name'] ?>: <?= $value['feedback'] ?></p>
    <? endforeach; ?>
    <form action="/goods_item/<?= $goods_item['id'] ?>/add" method="post">
        Оставьте отзыв: <br>
        <input type="text" name="name" placeholder="Ваше имя"><br>
        <input type="text" name="message" placeholder="Ваш отзыв"><br>
        <input type="submit">
    </form>
</div>