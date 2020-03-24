<?php include "processForm.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Kelvin Aron" content="Fullstack Developer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Preview and Upload PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     
     <div class="container">
         <div class="row">
             <div class="col-md-6">
               <div class="card">
                   <div class="card-header">
                      User Profile
                   </div>
                   <?php if(!empty($msg)):   ?>
                        <div class="alert <?php echo $css_class; ?>">
                            <?php echo $msg; ?>
                        </div>
                   <?php endif; ?>

                   <div class="card-body">
                   <form action="index.php" method="post" enctype="multipart/form-data">
                        <div class="form-group text-center">
                            <img src="images/placeholder.png" onclick="triggerClick()" alt="" id="profileDisplay">
                            <label for="ProfileImage">Profile Image</label>
                            <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                        </div>

                        <div class="form-group">
                        <label for="bio">Bio</label>
                            <textarea name="bio" id="bio" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="save-user" class="btn btn-primary btn-block">Save User</button>
                        </div>
                </form>
                   </div>
               </div>
             </div>
         </div>
     </div>

     <script src="js/script.js"></script>
</body>
</html>




<!-- 
    Developed by: @kevoocodes
 -->