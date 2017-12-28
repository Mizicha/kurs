<?php
  $login = $_POST['login'];
  $password = $_POST['password'];
  if($login == "admin")
  {
    echo 'Данный логин уже занят <a href = "register.php"><button>Назад</button></a>';
  }
  else
  {
    $ename = $_POST['ename'];
    $gid = $_POST['gid'];
    $pid = $_POST['pid'];
    $sdd_db_host='localhost';
    $sdd_db_name='kurs';
    $sdd_db_user='root';
    $sdd_db_pass='';
    @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
    @mysql_select_db($sdd_db_name);
    $sql = mysql_query($query = "SELECT id FROM employees WHERE name = '$ename'");
    $n = mysql_num_rows($sql);
    if ($n > 0)
      echo 'Пользователь с таким ФИО уже существует <a href = "register.php"><button>Назад</button></a>';
    else
    {
      $sql = mysql_query($query = "SELECT login FROM users WHERE login = '$login'");
      $n = mysql_num_rows($sql);
      if ($n > 0)
      {
        echo 'Данный логин уже занят <a href = "register.php"><button>Назад</button></a>';
      }
      else
      {
        mysql_query($sql="INSERT INTO employees (id_post, id_group, name) VALUES ('$pid', '$gid', '$ename');");
        $sql = mysql_query($query = "SELECT id FROM employees WHERE name = '$ename'");
        $string = mysql_fetch_assoc($sql);
        $eid = $string['id'];
        mysql_query($sql="INSERT INTO users (id_emp, login, password) VALUES ($eid,'$login', '$password')");
        include "index.php";
      }
    }
  }
?>
