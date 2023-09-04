<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <div class="container">
        <nav aria-label="Main Navigation">
          <ul role="menubar">
            <li role="none">
              <a href="/negar" role="menuitem" class="active">خانه</a>
            </li>
            <li role="none">
              <a href="#" role="menuitem">خدمات آتلیه نگاه</a>
            </li>
            <li role="none">
              <a href="#" role="menuitem">نمونه کارها</a>
            </li>
            <li role="none">
              <a href="gallary.php" role="menuitem">گالری</a>
            </li>
            <li role="none">
              <a href="upload.php" role="menuitem">آپلود تصویر</a>
            </li>
          </ul>
          <?php if(isset($_SESSION['user']) && !empty($_SESSION["user"])):?>
            <a href="logout.php">خروج از حساب</a>
          <?php endif; ?>
          <?php if(!isset($_SESSION['user'])):?>
            <a href="signin.php">ورود | ثبت نام</a>
          <?php endif; ?>
        </nav>
      </div>
    </header>
</body>
</html>