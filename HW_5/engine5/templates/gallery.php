<h2>Галерея</h2>
<? foreach ($images as $image): ?>
    <a href="/image_big/?id=<?= $image['id'] ?>"><img
                src="<?= IMG_DIR . 'gallery_img/small/' . $image['name'] ?>" alt="#"></a>
<? endforeach; ?>