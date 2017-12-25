<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>

  <div class="grid">
      <div class = "grid_item" style="padding-left : 10px; text-align: left; font: 20px bold;">Организация</div>
      <a href="login.php" class="grid_item"><div>Логин</div></a>
      <a href="register.php" class="grid_item"><div>Регистрация</div></a>
  </div>
  <div class="grid_2">
    <div class="grid_item grid" style="border: none; font-weight: bold;" ><div class="grid_item">Id </div><div class="grid_item">Name</div><div class="grid_item">Post </div></div>
    <?php
      include "phpread.php";
    ?>
  </div>

</body>

</html>
