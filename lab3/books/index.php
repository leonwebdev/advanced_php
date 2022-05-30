<?php

$dbh = new PDO('sqlite:' . __DIR__ . '/database.sqlite');

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

ob_start();

$query = "SELECT
book.book_id as id,
book.title as title,
book.num_pages as num_pages,
book.year_published as year_published,
author.name as author,
author.author_id as author_id,
genre.name as genre,
book.price as price,
book.description as book_description,
book.image as image
FROM
book
INNER JOIN author ON book.author_id = author.author_id
INNER JOIN genre ON book.genre_id = genre.genre_id
INNER JOIN format ON book.format_id = format.format_id
INNER JOIN publisher ON book.publisher_id = publisher.publisher_id
";

$stmt = $dbh->query($query);

$results = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($results);