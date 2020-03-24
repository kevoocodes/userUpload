<?php

include "processForm.php";
include "dbh.php";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$users =mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Kelvin Aron" content="Fullstack Developer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Preview and Upload PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<style>
    .container{
        margin-top: 50px;
    }
</style>
<body>
     
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                <h1 class="display-4">User Information</h1>
                    <table class="table table-bordered">

                      
                        <thead>
                            <th>Profile Image</th>
                            <th>User Bio</th>
                        </thead>
                        <tbody>
                            <tr>
                            <?php foreach($users as $user): ?>
                            <td> <img src="images/<?php echo $user['profile_image'];  ?>" width="80" alt=""></td>
                            <td><?php echo $user['bio']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
             </div>
         </div>
     </div>

     <script src="js/script.js"></script>
</body>
</html>




<!-- 
    Developed by: @kevoocodes
 -->