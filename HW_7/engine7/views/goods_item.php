<div>
    <h3><?= $goods_item['name']; ?></h3>
    <img src="<?= IMG_DIR . 'catalog_img/' . $goods_item['image'] ?>" alt="#" width="300px">
    <h3>Описание:</h3>
    <p><?= $goods_item['description']; ?></p>
    <p>Цена: <?= $goods_item['price']; ?></p>
    <button>Купить</button>
</div>