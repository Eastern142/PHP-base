<h2>Каталог</h2>
<div>
    <? foreach ($goods as $item): ?>
        <div>
            <a href="/goods_item/<?= $item['id'] ?>"><img src="<?= IMG_DIR . 'catalog_img/' . $item['goods_img'] ?>"
                                                          alt="#"></a><br>
            <a href="/goods_item/<?= $item['id'] ?>"><?= $item['goods_name'] ?></a><br>
            Цена: <?= $item['goods_price'] ?><br>
            <button>Купить</button>
            <hr>
        </div>
    <? endforeach; ?>
</div>