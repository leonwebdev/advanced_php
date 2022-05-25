<?php

require __DIR__ . '/../config.php';
require __DIR__ . '/../escape.php';
require __DIR__ . '/../Model/model.php';

$results = generalQuery();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Book List</title>
    <script src="function.js"></script>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Book List</a>

            <form class="d-flex">
                <input class="form-control me-2" name="search" type="search" placeholder="Search"
                    onkeyup="getSearch(event,this)" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </nav>
    <div class="container mt-5">

        <div class="row">
            <div class="col">
                <table id="list" class="table table-striped table-bordered">
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
                </table>
            </div>
            <div id="detail" class="col"></div>
        </div>

    </div>


</body>

</html>