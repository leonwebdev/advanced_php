<?php

/**
 * generalQuery query all books
 *
 * @return  mixed  return results in an array
 */
function generalQuery(): mixed
{
    global $dbh;

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

    // var_dump($results);

    return $results;
}


/**
 * query all books by search
 *
 * @param   string  $search  $search input from $_GET
 *
 * @return  mixed  return results in an array
 */
function queryBySearch(string $search): mixed
{
    global $dbh;

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

            WHERE
            author.name LIKE :placeholder OR
            book.title LIKE :placeholder OR
            genre.name LIKE :placeholder
            ";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':placeholder', '%' . $search . '%', PDO::PARAM_STR);

    $stmt->execute();

    $results = $stmt->fetchAll();

    return $results;
}