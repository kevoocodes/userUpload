<?php
include 'dbh.php'; //include to the database
$msg =""; //error message
$css_class = "";    //the class for the error message


if(isset($_POST['save-user'])){

    //declare variables
    $bio = $_POST['bio'];
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

    //temporary file for images
    $target = 'images/' . $profileImageName;


    //move to temporary image folder
      if   (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){
        $sql = "INSERT INTO users (profile_image, bio) VALUE('$profileImageName', '$bio')";

        if(mysqli_query($conn, $sql)) {
            $msg = "Image uploaded and saved to the database";
            $css_class = "alert-success";
        }else {
            $msg = "Database Error: Failed to save user";
            $css_class = "alert-danger";
        }

      
      }else{
          $msg = "Failed to upload to upload file";
          $css_class = "alert-danger";
      }
}


?>

<!-- 
    developed by: @kevoocodes
 -->