<?php
require_once __DIR__ . '/vendor/autoload.php';

use DominionEnterprises\Util\Arrays;

$genre = Arrays::get($argv, 1, 'Fantasy');
$sort = Arrays::get($argv, 2, 'title');

$books = new BooksCollection();
$books->find()->where(array('genre' => $genre))->sort($sort);

echo count($books) . " books found.\n";

foreach ($books as $book) {
    assert($book instanceof Book);
    assert($book->getPublishDate() instanceof \DateTime);
    assert(is_float($book->getPrice()));

    echo "Id: {$book->getId()}\n";
    echo "Title: {$book->getTitle()}\n";
    echo "Published: {$book->getPublishDate()->format('Y-m-d')}\n";
    echo "Description: {$book->getDescription()}\n";
    echo "\n";
}
