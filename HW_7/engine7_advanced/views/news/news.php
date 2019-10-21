<h2>Новости</h2>
<? foreach ($news as $item): ?>

    <p><a href="/news/newspage/<?=$item['id']?>"><?=$item['prev']?></a></p>

<?endforeach;?>


