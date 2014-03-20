<?php
interface IBooksCollection extends Iterator, Countable
{
    /**
     * Returns an instance of BooksCollection
     *
     * @return BooksCollection
     */
    public function find();

    /**
     * Limit this collection by a certian criteria.
     *
     * @param array $where The search criteria for the books collection.
     *
     * @return BooksCollection For a fluent interface
     */
    public function where(array $where);

    /**
     * Sort this collection by a certian field.
     *
     * @param string $field The field to sort by
     *
     * @return BooksCollection For a fluent interface
     */
    public function sort($field);
}
