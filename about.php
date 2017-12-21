<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="about.css" />
  </head>
  <body>
    <?php
      $_GET['a'];
      $ids = $_GET['a'];
      $sdd_db_host='localhost'; // ваш хост
      $sdd_db_name='kurs'; // ваша бд
      $sdd_db_user='root'; // пользователь бд
      $sdd_db_pass=''; // пароль к бд
      @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); // коннект с сервером бд
      @mysql_select_db($sdd_db_name); // выбор бд
      $result=mysql_query("SELECT name FROM employees where id = '$ids'");
      $group=mysql_query("SELECT name FROM groups WHERE id in (SELECT id_group from employees where id = '$ids')");
      $postname=mysql_query("SELECT name FROM post WHERE id in (SELECT id_post from employees where id = '$ids')");
      $postsalary=mysql_query("SELECT salary FROM post WHERE id in (SELECT id_post from employees where id = '$ids')");
      $grp = mysql_fetch_array($group);
      while($res=mysql_fetch_array($result) and $pname=mysql_fetch_array($postname) and $psalary=mysql_fetch_array($postsalary))
      {
        echo'
          <div class = grid>
            <div class = grid_item>
              ИМЯ: '.$res['name'].'
            </div>
            <div class = grid_item>
              ГРУППА: '.$grp['name'].'
            </div>
            <div class = grid_item>
              ДОЛЖНОСТЬ: '.$pname['name'].'
            </div>
            <div class = grid_item>
              Зарплата: '.$psalary['salary'].'
            </div>
          </div>
          <input type="button" value="Изменить">
        ';
      }
    ?>
  </body>
</html>
