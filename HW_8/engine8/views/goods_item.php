<div>
    <h3><?= $goods_item['name']; ?></h3>
    <img src="<?= IMG_DIR . 'catalog_img/' . $goods_item['image'] ?>" alt="#" width="300px">
    <h3>Описание:</h3>
    <p><?= $goods_item['description']; ?></p>
    <p>Цена: <?= $goods_item['price']; ?></p>
    <button data-id="<?= $goods_item['id'] ?>" class="buy">Купить</button>
</div>
<script>
  let buttons = document.querySelectorAll('.buy');

  buttons.forEach((elem) => {
    elem.addEventListener('click', () => {
      let id = elem.getAttribute('data-id');
      (async () => {
        const response = await fetch('/api/buy/' + id);
        const answer = await response.json();
        document.getElementById('count').innerText = answer.count;
      })();
    })
  });
</script>