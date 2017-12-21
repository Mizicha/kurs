<?php
  $sdd_db_host='localhost'; // ваш хост
  $sdd_db_name='kurs'; // ваша бд
  $sdd_db_user='root'; // пользователь бд
  $sdd_db_pass=''; // пароль к бд
  @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); // коннект с сервером бд
  @mysql_select_db($sdd_db_name); // выбор бд
  $result=mysql_query("SELECT * FROM `post` WHERE id in(1,2)");
	while($row=mysql_fetch_array($result))
  {
		echo '<div class = "grid_item grid" style="border: none;">
            <div class="grid_item">'.$row['id'].' </div><div class="grid_item">'.$row['name'].' </div><div class="grid_item">'.$row['salary'].'</div>
          </div>';
  }
?>
