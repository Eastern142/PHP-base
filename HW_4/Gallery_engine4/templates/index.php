<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery_engine4</title>
</head>
<body>
<? foreach ($img as $item): ?>
    <a href="<?= IMG_DIR . "big/" . $item ?>" target="_blank"><img src="<?= IMG_DIR . "small/" . $item ?>" alt="#"></a>
<? endforeach; ?>
</body>
</html>