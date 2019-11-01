<h2>Новости</h2>
<div>
    <? foreach ($news as $item): ?>
        <a href="/newspage/<?= $item['id'] ?>"><?= $item['title'] ?></a>
        <p><?= $item['preview'] ?></p>
    <? endforeach; ?>
</div>