
<script>
  (async () => {
    const response = await fetch('/delete/');
    const answer = await response.json();
    document.getElementById('count').innerText = answer.count;
    document.getElementById('totalCost').innerText = answer.totalCost;
    document.getElementById("item_" + id).remove();
  })();
</script>