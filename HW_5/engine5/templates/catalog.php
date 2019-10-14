<h2>Каталог</h2>
<div>
    <? foreach ($catalog_item as $item): ?>
        <div>
            <img src="<?= IMG_DIR . 'catalog_img/' . $item['img'] ?>" alt="#"><br>
            <?= $item['name'] ?><br>
            Цена: <?= $item['price'] ?><br>
            <button>Купить</button>
            <hr>
        </div>
    <? endforeach; ?>
</div>