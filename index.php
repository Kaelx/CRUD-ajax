<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <!-- <form action="controller/add.php" method="post"> -->
        <div>
            <label for="name">Enter name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Enter email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Enter password:</label>
            <input type="password" id="password" name="password">
        </div>
        <button onclick="add()">Submit</button>
    <!-- </form> -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr> 
        <?php 
           require('controller/config.php');
           $select="select * from users";
           $res=mysqli_query($conn,$select);
           while($row=mysqli_fetch_assoc($res)){ ?>
                    <tr>
                        <td><?php echo $row['id'];?></td> 
                        <td><?php echo $row['name'];?></td>   
                        <td><?php echo $row['email'];?></td> 
                        <td>
                            <button onclick="update('<?php echo $row['id'];?>')">Update</button>
                            <button onclick="deleteme('<?php echo $row['id'];?>')">Delete</button>
                        </td> 
                    </tr> 
        <?php  } 
        ?>
         
    </table>
<script src="jquery.js"></script>
<script src="js/main.js"></script>
</body>
</html>