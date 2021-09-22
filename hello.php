<?php
$mysqli = new mysqli("localhost","root","","thomas");


if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$creditcardnummer = $_POST['creditcardnummer'];
$wachtword = $_POST['wachtword'];
$expiry_date = $_POST['expiry_date'];

if ($mysqli->query("INSERT INTO creditcard VALUES ('$creditcardnummer', '$wachtword', '$expiry_date')") === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $mysqli->error;
  }
$mysqli -> close();


?>