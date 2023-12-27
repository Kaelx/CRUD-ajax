<?php
include 'controller/config.php';

$select = "SELECT * FROM users";
$res = mysqli_query($conn, $select);
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
    <div class="container col-md-5">
        <h3 class="text-center">REGISTER</h3>
        <div class="form-container">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="form-group">
                    <label for="mname">Middle Name</label>
                    <input type="text" class="form-control" id="mname" name="mname">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                </div>
                <div class="form-group">
                    <label for="bday">Birthdate</label>
                    <input type="date" class="form-control" id="bday" name="bday">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="phonenum">Phone Number</label>
                    <input type="text" class="form-control" id="phonenum" name="phonenum">
                </div>
                <div class="form-group mt-2">
                    <label for="profile">Profile Picture</label>
                    <input type="file" class="form-control-file" id="profile" name="profile">
                </div>
                <button type="submit" class="btn btn-primary mt-3" onclick="add()">Submit</button>
        </div>


        <div class="table-container mt-5">
            <h3 class="text-center">USERS</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['lname']; ?></td>
                                <td>
                                    <button class="btn btn-info" onclick="viewProfile('<?php echo $row['id']; ?>')">View Profile</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</body>
<script src="jquery.js"></script>
<script src="js/main.js"></script>

</html>