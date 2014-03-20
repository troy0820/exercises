Exercise 3 Books Collection
===========================

For this exercise you will be tasked to implement the `BooksCollection` and `Book' classes in order to have the given `run.php` execute without error.

### Rules
* `run.php` cannot be modified in any way. 
* Method signatures in the `IBooksCollection` interface cannot be modifed.
* Data can be pulled from the API described below but you are not required to do so.

### Example runs for `run.php`

`php run.php Fantasy price`

`php run.php Horror`


API Documentation
=================

The books API can be found [here](http://chadicus.herokuapp.com/books)

This api has two endpoints. `/books` which allows you to search all books and `/books/:id` which allows you to find a specific book and get more details about it.

## Search

### Available filters
* `genre` limit result by genre value
* `sort`  sort the response by a particular field. `sort` can be `title`, `genre` or `price`
* `offset` The begingin offset of the search. Default is `0`
* `limit` The number of results to return. Default is `5`

### Example 

#### Request

`curl http://chadicus.herokuapp.com/books?genre=Fantasy&sort=title&offset=2`

#### Response
```
{
    offset: 2,
    limit: 2,
    total: 4,
    books: [
        {
            url: "/books/bk104",
            id: "bk104",
            title: "Oberon's Legacy",
            genre: "Fantasy",
            price: 5.95
        },
        {
            url: "/books/bk105",
            id: "bk105",
            title: "The Sundered Grail",
            genre: "Fantasy",
            price: 5.95
        }
    ]
}
```

## Get by Id

#### Request
`curl http://chadicus.herokuapp.com/books/bk104`

#### Response
```
{
    author: "Corets, Eva",
    title: "Oberon's Legacy",
    genre: "Fantasy",
    price: 5.95,
    publishDate: 984200400,
    description: "In post-apocalypse England, the mysterious agent known only as Oberon helps to create a new life for the inhabitants of London. Sequel to Maeve Ascendant.",
    id: "bk104",
    url: "/books/bk104"
}
```

