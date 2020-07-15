
<?php
require_once ('../component/db.php'); //initializing Database

$email = $_POST['email'];
$amount = $_POST['amount'];

  // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO donated (email, amount, transaction, date)
VALUES ('$email', '$amount', true, NOW())";

if (mysqli_query($conn, $sql)) {
  echo "<div class='alert alert-success text-center'>Donation was Successfully!</div>";
} else {
  echo "<div class='alert alert-error text-center'>something went wrong". $sql . "<br>" . mysqli_error($conn) . "</div>";
}

mysqli_close($conn);
?>
