<?php
  $ids = $_GET['eid'];
  $sdd_db_host='localhost';
  $sdd_db_name='kurs';
  $sdd_db_user='root';
  $sdd_db_pass='';
  @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
  @mysql_select_db($sdd_db_name);
  mysql_query($sql = "DELETE FROM `users` WHERE users.id_emp in (SELECT id FROM employees where id = '$ids')");
  mysql_query($sql = "DELETE FROM `employees` WHERE id = '$ids'");

  echo 'Удаление прошло успешно <a  href="index.php"><button>Назад</button></a>';
?>
