<?php
  $ids = $_GET['eid'];
  $ename = $_GET['ename'];
  $gname = $_GET['gname'];
  $pname = $_GET['pname'];
  $salary = $_GET['salary'];
  echo'
    <html>
    <head>
      <link rel="stylesheet" type="text/css" href="index.css" />
    </head>
    <body>
      <div class="grid">
        <div class = "grid_item" style="padding-left : 10px; text-align: left; font: 20px bold;">Организация</div>
        <a class="grid_item"><div>'.$ename.'</div></a>
        <a href="index.php" class="grid_item"><div>Выйти</div></a>
      </div>
      <form method="POST" action="in.php?eid='.$ids.'">
        <div class = "grid_2">
          <label name="eid" value=1>
          <div class = grid_item  style = "text-align: left;">ИМЯ: <input type ="text" name="ename" placeholder='.$ename.' required></div>
          <div class = grid_item  style = "text-align: left;">ГРУППА: <select name="gname"><option>A</option><option>B</option></select> </div>
          <div class = grid_item  style = "text-align: left;">ДОЛЖНОСТЬ: <select name="pname"><option>Director</option><option>Manager</option></select> </div>
          <div class = grid_item  style = "text-align: left;">ЗАРПЛАТА: '.$salary.'</div>
        </div>
        <button type = "submit">Сохранить изменения</button>
      </form>
    </body>
    </html>
  ';
?>
