<?php

require __DIR__ . '/../config.php';
require __DIR__ . '/../escape.php';
require __DIR__ . '/../Model/model.php';

$results = queryBySearch($_GET['search']);
?><tbody>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Action</th>
    </tr>
    <?php foreach ($results as $key => $result) : ?>
    <tr>
        <td><?= esc($result['title']) ?></td>
        <td><?= esc($result['author']) ?></td>
        <td><?= esc($result['genre']) ?></td>
        <td><button class="btn btn-primary">View</button></td>
    </tr>
    <?php endforeach; ?>
</tbody>