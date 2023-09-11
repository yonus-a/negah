<?php
  session_start();

  require("utils/dbconnect.php");

  $conn = dbconnect();
  $userId = &$_SESSION['user']['id'];

  $sql = "SELECT * FROM image WHERE userId='$userId'";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="gallary.css">
  <title>Document</title>
</head>
<body>
  <?php require("header.php") ?>
  <div class="container">
    <div class="gallary">
      <?php if($result->num_rows <= 0):?>
        <h1>تصوری وجود ندارد</h1>
      <?php endif; ?>
        
      <?php if($result->num_rows > 0):?>
        <ul>
          <?php while($image = $result->fetch_assoc()): ?>
            <li>
              <img src="uploads/<?php echo $image['name'] ?>" alt="">
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>