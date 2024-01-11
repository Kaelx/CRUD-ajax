<?php

require('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST['name'], $_POST['email'])) {
          extract($_POST);

          $password = password_hash($password, PASSWORD_DEFAULT);

          $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

          if (mysqli_query($conn, $query)) {
               echo 'done!';
          } else {
               echo mysqli_error($conn);
          }
     }
}
?>