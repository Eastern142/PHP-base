<h2>Отзывы</h2>
<?= $error ?>
<form action="/feedback/<?= $action ?>/" method="post">
    <p>Оставьте отзыв:</p>
    <input type="text" name="name" placeholder="Ваше имя" value="<?= $name ?>"><br>
    <input type="text" name="message" placeholder="Ваш отзыв" value="<?= $feedtext ?>"><br>
    <input type="submit" value="<?= $buttonText ?>">
</form>
<? foreach ($feedback as $item): ?>
<p>
    <b><?=$item['name']?>:</b> <?=$item['feedback']?>
    <a href="/feedback/edit/<?=$item['id']?>">[Редактировать]</a>
    <a href="/feedback/delete/<?=$item['id']?>">[Удалить]</a><br>
</p>
<? endforeach; ?>