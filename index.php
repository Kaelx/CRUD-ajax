<?php
include 'controller/config.php';

$select = "SELECT * FROM users";
$qry = $conn->query($select);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <h3 class="text-center">REGISTER</h3>
                <form action="#" method="post" onsubmit="add(event)">
                    <div class="form-group mb-3">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" autofocus required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="mname">Middle Name</label>
                        <input type="text" class="form-control" id="mname" name="mname" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="bday">Birthdate</label>
                        <input type="date" class="form-control" id="bday" name="bday" max="2020-12-31" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" id="age" name="age" oninput="if(value.length>3)value=value.slice(0,3)" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phonenum">Phone Number</label>
                        <input type="number" class="form-control" id="phonenum" name="phonenum" oninput="if(value.length>11)value=value.slice(0,11)" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="profile">Profile Picture</label>
                        <input type="file" class="form-control" id="profile" name="profile" required>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3 class="text-center">USERS</h3>
                <div class="table-wew">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $qry->fetch_assoc()) :
                            ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                                    <td>
                                        <button class="btn btn-primary" onclick="viewProfile('<?php echo $row['id']; ?>')">View Profile</button>
                                    </td>
                                </tr>
                            <?php endwhile;  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

</html>