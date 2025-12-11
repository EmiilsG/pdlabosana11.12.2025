<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname = "book_review_24092025";


$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$stmt = $mysqli -> prepare("INSERT INTO book_review (full_name , book_title , review_text,  rating, submitted_at) VALUES (?, ?, ?, ?, ?)");
$stmt -> bind_param( $full_name, $book_title, $review_text, $rating, $submitted_at );

$fname = "Emils";
$lname = "Grinerts";
$title = "asdfg";
$description = "fddf";
$level = 1;
$stmt -> execute();

echo "New records created successfully";

$stmt -> close();
$mysqli -> close();
?>
?>