<h2>Новости</h2>
<? foreach ($news as $item): ?>
    <a href="/newspage/?id=<?= $item['id'] ?>"><?= $item['title'] ?></a>
    <p><?= $item['prevew'] ?></p>
<? endforeach; ?>