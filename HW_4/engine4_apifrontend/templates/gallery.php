<div id="text">
    <?php foreach ($gallery as $filename): ?>
        <a href="/gallery_img/big/<?= $filename ?>"><img src="/gallery_img/small/<?= $filename ?>"></a>
    <? endforeach; ?>
</div>
