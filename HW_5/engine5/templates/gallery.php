<h2>Галерея</h2>
<? foreach ($images as $image): ?>
    <a href="/gallery_big/?id=<?= $image['id'] ?>&action=like"><img
                src="<?= IMG_DIR . 'gallery_img/small/' . $image['name'] ?>" alt="#"></a>
<? endforeach; ?>