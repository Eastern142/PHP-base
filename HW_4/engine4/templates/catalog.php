<h2>Каталог</h2>
<div>
    <? foreach ($catalog as $item): ?>
        <div>
            <a href="<?= CATALOG_IMG_DIR . "big/" . $item["img"] ?>" target="_blank">
                <img src="<?= CATALOG_IMG_DIR . $item["img"] ?>" alt=""></a>
            <?= $item["name"] ?><br>
            Цена: <?= $item["price"] ?><br>
            <button>Купить</button>
            <hr>
        </div>
    <? endforeach; ?>
</div>