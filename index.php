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
    <a href="register.php" class="grid_item" style=""><div>Регистрация</div></a>
  </div>

  <div class="grid_2" >
    <div class = "grid_item">id</div>
    <?php
      include "phpread.php";
    ?>
    <div class="grid_item" >2</div>
    <div class="grid_item" >3</div>
    <div class="grid_item" >4</div>
    <div class="grid_item" >5</div>
  </div>
</body>

</html>
