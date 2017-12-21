<?php
  $sdd_db_host='localhost'; // ваш хост
  $sdd_db_name='kurs'; // ваша бд
  $sdd_db_user='root'; // пользователь бд
  $sdd_db_pass=''; // пароль к бд
  @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); // коннект с сервером бд
  @mysql_select_db($sdd_db_name); // выбор бд
  $result=mysql_query("SELECT id, name FROM employees");
  $postname=mysql_query("SELECT name FROM post WHERE id in (SELECT id_post from employees)");
	while($row=mysql_fetch_array($result))
  {
    $r2=mysql_fetch_array($postname);
		echo '<a href = "about.php?a='.$row['id'].'" class="grid_item_2" style="border: none;"><div class = "grid_item grid" style="border: none;">
            <div class="grid_item">'.$row['id'].' </div><div class="grid_item">'.$row['name'].' </div><div class="grid_item">'.$r2['name'].'</div>
          </div></a>';
  }
?>
