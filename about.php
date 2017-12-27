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
      $sdd_db_host='localhost';
      $sdd_db_name='kurs';
      $sdd_db_user='root';
      $sdd_db_pass='';
      @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
      @mysql_select_db($sdd_db_name);
      $result=mysql_query("SELECT name FROM employees where id = '$ids'");
      $group=mysql_query("SELECT name FROM groups WHERE id in (SELECT id_group from employees where id = '$ids')");
      $postname=mysql_query("SELECT name FROM post WHERE id in (SELECT id_post from employees where id = '$ids')");
      $postsalary=mysql_query("SELECT salary FROM post WHERE id in (SELECT id_post from employees where id = '$ids')");
      $grp = mysql_fetch_array($group);
      while($res=mysql_fetch_array($result) and $pname=mysql_fetch_array($postname) and $psalary=mysql_fetch_array($postsalary))
      {
        echo'
          <html>
          <head>
            <link rel="stylesheet" type="text/css" href="index.css" />
          </head>
          <body>
            <div class="grid">
                <div class = "grid_item" style="padding-left : 10px; text-align: left; font: 20px bold;">Организация</div>
                <a href="login.php" class="grid_item"><div>Логин</div></a>
                <a href="register.php" class="grid_item"><div>Регистрация</div></a>
            </div>
            <div class = grid_2>
              <div class = grid_item style = "text-align: left;">
                ИМЯ: '.$res['name'].'
              </div>
              <div class = grid_item style = "text-align: left;">
                ГРУППА: '.$grp['name'].'
              </div>
              <div class = grid_item style = "text-align: left;">
                ДОЛЖНОСТЬ: '.$pname['name'].'
              </div>
              <div class = grid_item style = "text-align: left;">
                Зарплата: '.$psalary['salary'].'
              </div>
            </div>
            <a href="index.php"><button>Назад</button></a>
          </body>
          </html>
        ';
      }
    ?>
  </body>
</html>
