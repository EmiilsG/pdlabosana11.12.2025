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
$full_name = $_POST['fname'];
echo $full_name;

$book_title = $_POST['title'];
echo $book_title;

$review_text = $_POST['description'];
echo $review_text;

$rating = $_POST['rating'];
echo $rating;

// $submitted_at = "2019-01-01";


// $stmt = $mysqli -> prepare("INSERT INTO book_review (full_name , book_title , review_text,  rating, submitted_at) VALUES (?, ?, ?, ?, ?)");
// $stmt->bind_param( $full_name, $book_title, $review_text, $rating, $submitted_at );
$stmt = $mysqli -> prepare("INSERT INTO book_review (full_name, book_title, review_text, rating) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssd", $full_name, $book_title, $review_text, $rating);

 $stmt->execute();

echo "New records created successfully";

$stmt->close();
$mysqli->close();

