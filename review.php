<?php

class Review {
 private $full_name;
 private  $book_title;
 private  $review_text;
 private  $rating;

function set_full_name($full_name) {
    $this->full_name = $full_name;
  }
  function get_full_name() {
    return $this->full_name;
  }
function set_book_title($book_title) {
    $this->book_title = $book_title;
  }
  function get_book_title() {
    return $this->book_title;
  }
function set_review_text($review_text) {
    $this->review_text = $review_text;
  }
  function get_review_text() {
    return $this->review_text;
  }
function set_rating($rating) {
    $this->rating = $rating;
  }
  function get_rating() {
    return $this->brating;
  }
}






