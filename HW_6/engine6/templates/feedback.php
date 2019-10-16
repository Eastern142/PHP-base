<h2>Отзывы</h2>

<?=$messages?>

<form action="/feedback/add/" method="post">
    Оставьте отзыв: <br>
    <input type="text" name="name" placeholder="Ваше имя"><br>
    <input type="text" name="message" placeholder="Ваш отзыв"><br>
    <input type="submit">
</form>

<?foreach ($feedback as $value): ?>

<p><?=$value['name']?>: <?=$value['feedback']?></p>

<?endforeach;?>
