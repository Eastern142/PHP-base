<h2>Галерея</h2>
<div>
    <? foreach ($image_list as $image): ?>
        <a href="<?= GALLERY_IMG_DIR . "big/" . $image ?>" target="_blank">
            <img src="<?= GALLERY_IMG_DIR . $image ?>" alt="<?= $image ?>"></a>
    <? endforeach; ?>
</div>
