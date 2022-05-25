<?php

require __DIR__ . '/../config.php';
require __DIR__ . '/../escape.php';
require __DIR__ . '/../Model/model.php';

$result = queryOne($_GET['id']);

?>
<h1><?= esc($result['title']) ?></h1>
<img src="images/covers/<?= esc($result['image']) ?>" class="my-3" alt="img">

<ul class="list-unstyled">
    <?php foreach ($result as $key => $value) : ?>
    <?php if ($key != 'book_id' && $key != 'image') : ?>
    <?php if ($key == 'description') : ?>
    <li><strong><?= esc(ucwords(str_replace('_', ' ', $key))) ?></strong>: <p><?= esc(strip_tags($value)) ?></p>
    </li>
    <?php elseif ($key == 'in_print') : ?>
    <li><strong><?= esc(ucwords(str_replace('_', ' ', $key))) ?></strong>: <?= esc('Yes') ?></li>
    <?php elseif ($key == 'price') : ?>
    <li><strong><?= esc(ucwords(str_replace('_', ' ', $key))) ?></strong>: <?= esc('$' . $value) ?></li>
    <?php else : ?>
    <li><strong><?= esc(ucwords(str_replace('_', ' ', $key))) ?></strong>: <?= esc(strip_tags($value)) ?></li>
    <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<button class="btn btn-success">Add to Cart</button>