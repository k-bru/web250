<?php

class Book {
  var $title;
  var $author;

  function showDueDate() {
    return date('d F, Y');
  }

  function bookAuthor() {
    return "This book is titled " . $this->title . " and is written by " . $this->author . ".<br>";
  }

  // function reservationStatus($int) {

  // }
}

$book = new Book;
$book->title = "The Hobbit";
$book->author = "J.R.R. Tolkien";
echo $book->bookAuthor();

$book2 = new Book;
$book2->title = "Lord of the Flies";
$book2->author = "William Golding";
echo $book2->bookAuthor();
