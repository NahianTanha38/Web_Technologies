<?php
class Book {

    function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    function getDetails() {
        return "Title: $this->title, Author: $this->author, Year: $this->year";
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setYear($year) {
        $this->year = $year;
    }
}

$book = new Book("Harry Potter", "J.K. Rowling", 1997);

echo $book->getDetails();
?>

