<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="index.css" />
</head>

<body>
  <a href="index.php" style="font-size: 50px;">&#x2190;</a>
  <form method="POST" action="register2.php" style="display: grid; margin: 50px; font-size: 20px; ">
    <input type="text" required placeholder="Логин" name ="login"
    style="padding: 10px; margin: 10px; margin-top: -40px; width: 400px; font-size: 20px;">
    <input type="text" required placeholder="Пароль" name = "password"
    style="padding: 10px; margin: 10px; width: 400px; font-size: 20px;">
    <input type="text" required placeholder="ФИО" name = "ename"
    style="padding: 10px; margin: 10px; width: 400px; font-size: 20px;" >
    <div style="margin-left: 10px">GROUP:</div>
    <select name="gid" style="padding: 10px; margin: 10px; width: 400px; font-size: 20px;">
      <option value="1">A</option>
      <option value="2">B</option>
    </select>
    <div style="margin-left: 10px">POST:</div>
    <select name="pid" style="padding: 10px; margin: 10px; width: 400px; font-size: 20px;">
        <option value="1">Director</option>
        <option value="2">Manager</option>
    </select>
    <div><input type="submit" style="width: 100px;"></div>
  </form>
</body>

</html>
