<?php
$sdd_db_host='localhost';
$sdd_db_name='kurs';
$sdd_db_user='root';
$sdd_db_pass='';
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
@mysql_select_db($sdd_db_name);
$ids = $_GET['a'];
$query = "SELECT employees.name as ename, groups.name as gname, post.name as pname, salary
          FROM employees, groups, post
          WHERE employees.id = '$ids' AND employees.id_group  = groups.id AND employees.id_post = post.id";
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
        <div class="grid_item"></div>
        <a class="grid_item"><div>'.$ename.'</div></a>
      </div>
      <div class = "grid_2">
        <div class = grid_item  style = "text-align: left;">ИМЯ: '.$ename.' </div>
        <div class = grid_item  style = "text-align: left;">ГРУППА: '.$gname.' </div>
        <div class = grid_item  style = "text-align: left;">ДОЛЖНОСТЬ: '.$pname.' </div>
        <div class = grid_item  style = "text-align: left;">ЗАРПЛАТА: '.$salary.' </div>
      </div>
      <a href="change.php?eid='.$ids.'&ename='.$ename.'&gname='.$gname.'&pname='.$pname.'&salary='.$salary.'">
          <button type = "submit">Изменить</button>
      </a>
      <a href="delete.php?eid='.$ids.'"><button>Удалить сотрудника</button></a>
      <a href="admin.php"><button>Назад</button></a>
    </body>
    </html>
  ';
}
?>
