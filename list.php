 <?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname = "book_review_24092025";


$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
 
 
$sql = "SELECT full_name, book_title, review_text, rating FROM book_review";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    echo "full name: " . $row["full_name"]. " - book title: " . $row["book_title"]. " - review: " . $row["review_text"]. "raiting: " . $row["rating"]. "<br>";
  }
} else {
  echo "0 results";
}
$mysqli->close();


