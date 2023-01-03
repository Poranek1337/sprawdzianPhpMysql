<?php
require_once "connection.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data = $_POST['data'];
    $query = "UPDATE klasa SET imie = '$imie', nazwisko = '$nazwisko', data = '$data' WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Coś się popsuło (błąd edycji użytkownika)";
    }
} else {
    header("Location: index.php");
}
