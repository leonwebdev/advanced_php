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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Book List</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Book List</a>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </nav>
    <div class="container mt-5">

        <div class="row">
            <div class="col">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                        <th>Action</th>
                    </tr>
                    <div id="list">
                        <?php foreach ($results as $key => $result) : ?>
                        <tr>
                            <td><?= esc($result['title']) ?></td>
                            <td><?= esc($result['author']) ?></td>
                            <td><?= esc($result['genre']) ?></td>
                            <td><button class="btn btn-primary">View</button></td>
                        </tr>
                        <?php endforeach; ?>
                    </div>
                </table>
            </div>
            <div id="detail" class="col"></div>
        </div>

    </div>


</body>

</html>