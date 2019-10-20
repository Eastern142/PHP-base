<h2>Каталог</h2>
<div>
    <? foreach ($goods as $item): ?>
        <div>
            <a href="/goods_item/<?= $item['id'] ?>"><?= $item['name'] ?></a><br>
            <a href="/goods_item/<?= $item['id'] ?>">
                <img src="<?= IMG_DIR . 'catalog_img/' . $item['image'] ?>" alt="#" width="150px"></a><br>
            Цена: <?= $item['price'] ?><br>
            <button>Купить</button>
            <hr>
        </div>
    <? endforeach; ?>
</div>