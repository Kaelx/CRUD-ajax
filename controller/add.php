<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST['fname'], $_POST['mname'], $_POST['lname'], $_POST['bday'], $_POST['age'], $_POST['address'], $_POST['phonenum']) && isset($_FILES['profile'])) {

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $bday = $_POST['bday'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phonenum = $_POST['phonenum'];

        $profile_name = $_FILES['profile']['name'];
        $profile_temp = $_FILES['profile']['tmp_name'];
        $upload_path = "../storage/$profile_name";
        

        if (move_uploaded_file($profile_temp, $upload_path)) {
            $sql = "INSERT INTO users (fname, mname, lname, bday, age, address, phonenum, profile) VALUES ('$fname', '$mname', '$lname', '$bday', '$age', '$address', '$phonenum', '$upload_path')";

            if (mysqli_query($conn, $sql)) {
                echo 1;
            } else {
                echo mysqli_error($conn);
            }
        }

    }else{
        echo 0;
    }
}
?>