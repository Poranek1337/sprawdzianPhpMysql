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
        require_once "connection.php";
        
        $sort = $_GET['sort'] ?? 'id';
        $order = $_GET['order'] ?? 'asc';
        $query = "SELECT * FROM klasa ORDER BY $sort $order";
        $result = mysqli_query($connection, $query);
    ?>
    <form method="get" action="index.php">
        <select name="sort">
            <option value="id">id</option>
            <option value="imie">imie</option>
            <option value="nazwisko">nazwisko</option>
            <option value="data">data</option>
        </select>
        <select name="order">
            <option value="asc">asc</option>
            <option value="desc">desc</option>
        </select>
        <input type="submit" value="sortuj">
    </form>
    <?php

        while($row = mysqli_fetch_assoc($result)){
            echo $row['id'] . " " . $row['imie'] . " " . $row['nazwisko'] . " " . $row['data'];
            echo " " . "<a href='deleteUser.php?id=" . $row['id'] . "'>Usuń</a>";
            echo " " . "<a href='editUser.php?id=" . $row['id'] . "'>Edytuj</a>";
            echo "<br>";
        }
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
