
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "2a";
$connection = @mysqli_connect($host, $username, $password, $database);

$query = "SELECT * FROM klasa";
$result = mysqli_query($connection, $query);

//stworz to w tabeli while($row = mysqli_fetch_assoc($result))
echo "<table border='1'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>imie</th>";
echo "<th>nazwisko</th>";
echo "</tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['imie'] . "</td>";
    echo "<td>" . $row['nazwisko'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<hr>
<form action="addUser.php" method="post">
    <input type="text" name="imie" placeholder="imie" required>
    <input type="text" name="nazwisko" placeholder="nazwisko" required>
    <input type="date" name="data" required>
    <input type="submit" name="submit" value="dodaj">
</form>
</body>
</html>