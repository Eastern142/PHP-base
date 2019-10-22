<h2>Каталог</h2>
<div>
    <? foreach ($goods as $item): ?>
        <div>
            <a href="/goods_item/<?= $item['id'] ?>"><?= $item['name'] ?></a><br>
            <a href="/goods_item/<?= $item['id'] ?>">
                <img src="<?= IMG_DIR . 'catalog_img/' . $item['image'] ?>" alt="#" width="150px"></a><br>
            Цена: <?= $item['price'] ?><br>
            <button data-id="<?= $item['id'] ?>" class="buy">Купить</button>
            <hr>
        </div>
    <? endforeach; ?>
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
        // document.getElementById(id).remove();
      })();
    })
  });
</script>