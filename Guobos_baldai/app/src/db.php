<?php
  $DB_SERVER = "localhost";
  $DB_USER = "root";
  $DB_PASSWORD = "";
  $DB_NAME = "guobosbaldai";

  $conn = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);
  if ($conn->connect_error) {
    echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
    echo "Klaida: " . $conn->connect_error . "\n";
    exit;
  }

  // $sql = "SELECT * FROM klientai";
  // $result = $mysqli->query($sql);
  // $array = $result->fetch_assoc();
  // var_dump($array);

  mysqli_query($conn,"INSERT INTO klientai (vardas, email, message) VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[message]')");


 ?>
