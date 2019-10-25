<h2>Корзина</h2>
<? foreach ($basket as $item): ?>
    <div id="item_<?= $item['basket_id'] ?>"> <!-- basket_id - поле id в таблице basket -->
        <?= $item['name'] ?><br>
        <img src="<?= IMG_DIR . "catalog_img/" . $item['image'] ?>" alt="#" width="150px"><br>
        <button class="delete" data-id="<?= $item['basket_id'] ?>">Удалить</button>
        <br>
        Цена: <?= $item['price'] ?><br>
    </div>
<? endforeach; ?>
Общая стоимость: <span id="totalCost"><?= $totalCost ?></span>
<h2>Оформите заказ</h2>
<p class="answer"></p>
<form action="/order/status/" method="post">
    <input type="text" name="name" placeholder="Ваше имя">
    <input type="text" name="phone" placeholder="Телефон">
    <input type="text" name="address" placeholder="Адрес доставки">
    <input type="submit" value="Продолжить">
</form>
<script>
  let buttons = document.querySelectorAll('.delete');

  buttons.forEach((elem) => {
    elem.addEventListener('click', () => {
      let id = elem.getAttribute('data-id');
      (async () => {
        const response = await fetch('/api/delete/' + id);
        const answer = await response.json();
        document.getElementById('count').innerText = answer.count;
        document.getElementById('totalCost').innerText = answer.totalCost;
        document.getElementById("item_" + id).remove();
      })();
    })
  });
</script>