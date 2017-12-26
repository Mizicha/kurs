<?php
  $login = $_POST['login'];
  $password = $_POST['password'];
  $sdd_db_host='localhost';
  $sdd_db_name='kurs';
  $sdd_db_user='root';
  $sdd_db_pass='';
  @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
  @mysql_select_db($sdd_db_name);
  //$query = "SELECT login, password FROM "
  function Check($login, $password)
  {
    $query = "SELECT login, password FROM users, employees WHERE id_emp = employees.id AND login = '$login' AND password = '$password'";
    $sql = mysql_query($query);
    $n = mysql_num_rows($sql);
    if ($n <> 0)
    {
      return true;
    }
    else return false;
  }
  if (Check($login, $password) == true)
  {
    echo "1";
  }
  else echo "2";
  //$query = "SELECT employees.name as ename, groups.name as gname, post.name as pname, post.salary FROM ";
?>
