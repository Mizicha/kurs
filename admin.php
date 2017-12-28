<html>
<head>
  <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
  <div class="grid">
      <div class = "grid_item" style="padding-left : 10px; text-align: left; font: 20px bold;">Организация</div>
      <a class="grid_item"><div>ADMIN</div></a>
      <a href="index.php" class="grid_item"><div>Выйти</div></a>
  </div>
  <div class="grid_2">
    <div class="grid_item grid" style="border: none; font-weight: bold;" >
      <div class="grid_item">Id </div>
      <div class="grid_item">Name</div>
      <div class="grid_item">Post </div>
    </div>
    <?php
      $sdd_db_host='localhost';
      $sdd_db_name='kurs';
      $sdd_db_user='root';
      $sdd_db_pass='';
      @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
      @mysql_select_db($sdd_db_name);
      $query = "SELECT employees.id, employees.name as ename, post.name FROM employees, post WHERE  employees.id_post = post.id";
      $sql = mysql_query($query);
      $n = mysql_num_rows($sql);
      for ($i=0; $i < $n; $i++)
      {
        $string = mysql_fetch_assoc($sql);
        $eid=$string['id'];
        $ename=$string['ename'];
        $pname=$string['name'];
        echo '<a href = "adminabout.php?a='.$eid.'" class="grid_item_2" style="border: none;">
                <div class = "grid_item grid" style="border: none;">
                  <div class="grid_item">'.$eid.' </div>
                  <div class="grid_item">'.$ename.' </div>
                  <div class="grid_item">'.$pname.' </div>
                </div>
              </a>';
      }
    ?>
  </div>
</body>
</html>
