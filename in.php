<?php
  $eid = $_GET['eid'];
  $ename = $_POST['ename'];
  $gname = $_POST['gname'];
  $pname = $_POST['pname'];
  $sdd_db_host='localhost';
  $sdd_db_name='kurs';
  $sdd_db_user='root';
  $sdd_db_pass='';
  @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
  @mysql_select_db($sdd_db_name);
  mysql_query($sql = "UPDATE employees SET employees.name = '$ename' WHERE employees.id = '$eid'");
  mysql_query($sql = "UPDATE employees SET id_group = (SELECT id FROM groups WHERE name = '$gname') WHERE id = '$eid'");
  mysql_query($sql = "UPDATE employees SET id_post = (SELECT id FROM post WHERE name = '$pname') WHERE id = '$eid'");
  $query = "SELECT employees.name as ename, groups.name as gname, post.name as pname, salary
            FROM employees, groups, post
            WHERE employees.id = '$eid' AND employees.id_group  = groups.id AND employees.id_post = post.id";
  $sql = mysql_query($query);
  $n = mysql_num_rows($sql);
  for($i = 0; $i < $n; $i++)
  {
    $string = mysql_fetch_array($sql);
    $ename = $string['ename'];
    $gname = $string['gname'];
    $pname = $string['pname'];
    $salary = $string['salary'];
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
        <div class = "grid_2">
          <div class = grid_item  style = "text-align: left;">ИМЯ: '.$ename.' </div>
          <div class = grid_item  style = "text-align: left;">ГРУППА: '.$gname.' </div>
          <div class = grid_item  style = "text-align: left;">ДОЛЖНОСТЬ: '.$pname.' </div>
          <div class = grid_item  style = "text-align: left;">ЗАРПЛАТА: '.$salary.' </div>
        </div>
      </body>
      </html>
    ';
  }
?>
