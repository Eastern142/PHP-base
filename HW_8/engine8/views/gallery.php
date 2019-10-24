<h2>Галерея</h2>
<div>
    <? foreach ($images as $image): ?>
        <a href="/gallery_item/<?= $image['id'] ?>">
            <img src="<?= IMG_DIR . 'gallery_img/big/' . $image['filename'] ?>" alt="#" width="150px"></a>
    <? endforeach; ?>
</div>