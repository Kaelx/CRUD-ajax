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

    <div class="container col-md-12 d-flex justify-content-around">

        <div class="form-container col-md-4">
            <h3 class="text-center">REGISTER</h3>
            <form action="#" method="post">
                <div class="form-group mb-3">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="form-group mb-3">
                    <label for="mname">Middle Name</label>
                    <input type="text" class="form-control" id="mname" name="mname">
                </div>
                <div class="form-group mb-3">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                </div>
                <div class="form-group mb-3">
                    <label for="bday">Birthdate</label>
                    <input type="date" class="form-control" id="bday" name="bday" max="2020-12-31">
                </div>
                <div class="form-group mb-3">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" oninput="if(value.length>3)value=value.slice(0,3)">
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group mb-3">
                    <label for="phonenum">Phone Number</label>
                    <input type="number" class="form-control" id="phonenum" name="phonenum" oninput="if(value.length>11)value=value.slice(0,11)">
                </div>
                <div class="form-group mb-3">
                    <label for="profile">Profile Picture</label>
                    <input type="file" class="form-control" id="profile" name="profile">
                </div>
                <button type="submit" class="btn btn-success mt-3" onclick="add(event)">Submit</button>
            </form>
        </div>


        <div class="table-container col-md-6">
            <h3 class="text-center">USERS</h3>
            <div class="table-responsive">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                                <td>
                                    <button class="btn btn-primary" onclick="viewProfile('<?php echo $row['id']; ?>')">View Profile</button>
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