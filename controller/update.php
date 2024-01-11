<?php
require('config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST['name'])) {
          extract($_POST);

          $query = "update users set name='$name' where id='$id'";
          if (mysqli_query($conn, $query)) {
               echo 'done!';
          } else {
               echo mysqli_error($conn);
          }
     }
}
?>