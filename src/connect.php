<?php
$host = "mysql";
$username = "root";
$password = getenv('MYSQL_ROOT_PASSWORD');

require_once('./mail.php');

// Create connection
$conn = new mysqli($host, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connect to database successfully! <br>";

  // create db and table
  $sql = "CREATE TABLE contact (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50) NOT NULL
  )";

  $conn->query("CREATE DATABASE test");
  $conn->query("USE test");
  $conn->query($sql);
}


if($_SERVER['REQUEST_METHOD'] == "POST") {
  // insert data to `contact` table
  $emailList = explode("\n", $_POST['emailList']);

  foreach ($emailList as $email) {
    $emailTrim = trim($email);
    $sql = "INSERT INTO contact (email) VALUES ('$emailTrim')";
    $conn->query($sql);

    sendMail($emailTrim);
  }

  // show data from `contact` table
  $sql = "SELECT id, email FROM contact";
  $result = $conn->query($sql);

  while($row = $result->fetch_assoc()) {
    echo "<br>" . $row["id"]. " - Email: " . $row["email"];
  }
}

$conn->close();
?>