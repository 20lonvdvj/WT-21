<?php
  $servername = "sql313.epizy.com";
  $username = "epiz_33712265";
  $password = "YnxrK17IpwbfJY4";
  $dbname = "epiz_33712265_form";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
  }

  $name = $_POST['name'];
  $email = $_POST['email'];
  $messege = $_POST['messege'];

  $sql = "INSERT INTO users (name, email, messege) VALUES ('$name', '$email', '$messege')";

  if (mysqli_query($conn, $sql)) {
    echo "Succesfull,Your action has been saved!!!!!";
  }

  else {
    echo "Error";
  }

?>