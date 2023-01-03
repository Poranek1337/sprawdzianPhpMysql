<?php
require_once "connection.php";

$imie = "";
$nazwisko = "";
$data = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM klasa WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $imie = $row['imie'];
    $nazwisko = $row['nazwisko'];
    $data = $row['data'];
}

?>

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
    <form action="editUserAction.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="imie" placeholder="imie" value="<?php echo $imie; ?>" required>
        <input type="text" name="nazwisko" placeholder="nazwisko" value="<?php echo $nazwisko; ?>" required>
        <input type="date" name="data" value="<?php echo $data; ?>" required>
        <input type="submit" name="submit" value="edytuj">
    </form>
</body>
</html>
