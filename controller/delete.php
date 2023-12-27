<?php
require('config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST['id'])) {
          extract($_POST);

          $query = "delete from users where id='$id'";
          if (mysqli_query($conn, $query)) {
               echo 1;
          } else {
               echo mysqli_error($conn);
          }
     }
}
