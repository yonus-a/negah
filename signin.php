<?php
  session_start();

  $email = &$_POST['email'];
  $password = &$_POST['password'];
  
  if(!empty($email) && !empty($password)) {
   require("utils/dbconnect.php");

    $conn = dbconnect();

    $sql_getUser = "SELECT * FROM user WHERE email='$email'";
    $mabyUser = $conn->query($sql_getUser)->fetch_assoc();

    if(!$mabyUser) {
      $sql_createUser = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
      if($conn->query($sql_createUser) === true) {
        $insertedId = mysqli_insert_id($conn);
        $user = $conn->query("SELECT * FROM user WHERE id=$insertedId")->fetch_assoc();
        $_SESSION['user'] = $user;
        header("location:/negar");
      }
    } else {
      if($mabyUser['password'] === $password) {
        $_SESSION['user'] = $mabyUser;
        header("location:/negar");
      }
    }
    
  }
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="singin.css">
    <title>negar</title>
  </head>
  <body>
    <div class="signin">
      <h1>ورود | ثبت نام</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label>
          آِدرس ایمیل:
          <input type="email" name="email" required />
        </label>
        <label>
          رمز ورود:
          <input type="password" name="password" required />
        </label>
        <button type="submit">ثبت نام</button>
      </form>
    </div>
  </body>
</html>