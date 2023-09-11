<?php

session_start();

if(!isset($_SESSION['user']) && empty($_SESSION['user'])) {
  header("location:/negar/signin.php");
}

if(isset($_FILES["fileToUpload"])) {

$target_dir = "uploads/";
$imageName = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $imageName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    require("utils/dbconnect.php");
    
    $conn = dbconnect();
    $userId = $_SESSION['user']['id'];
    $sql = "INSERT INTO image (name, userId) VALUES ('$imageName', $userId)";

    if($conn->query($sql) === true) {
      echo "image has sucessfully uploaded";
    }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require("header.php") ?>
  <br><b></b><br><b></b><br><b></b>
  <div class="container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </form>
  </div>
</body>
</html>