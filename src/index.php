<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <form action="./test/echo.php" method="post">
    <input type="submit" name="echo-test" value="Echo Test" />
  </form>
  <form action="./test/conn.php" method="post">
    <input type="submit" name="conn-test" value="MariaDB Connection Test" />
  </form>
  <form action="./db/create-db.php" method="post">
    <input type="text" name="db-name"><br>
    <input type="submit" name="create-db-test" value="Create Database Test" />
  </form>
</body>

</html>