<?php
include '../controller/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 0) {
        header("Location: javascript://history.go(-1)");
        exit;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <img src="<?php echo $row['profile']; ?>" alt="<?php echo $row['fname']; ?> profile picture" class="img-fluid" style="max-width: 200px;">
                                        <P><strong>Profile Picture</strong></P>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">First Name:</th>
                                    <td><?php echo $row['fname']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Middle Name:</th>
                                    <td><?php echo $row['mname']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Last Name:</th>
                                    <td><?php echo $row['lname']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Birthday:</th>
                                    <td> <?php echo date('F d, Y', strtotime($row['bday'])); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Age:</th>
                                    <td><?php echo $row['age']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Address:</th>
                                    <td><?php echo $row['address']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone Number:</th>
                                    <td><?php echo $row['phonenum']; ?></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-primary" href="../index.php">BACK</a>
            </div>
        </div>
    </div>
</body>

</html>