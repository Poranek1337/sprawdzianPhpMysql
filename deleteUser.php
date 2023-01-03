<?php
require_once "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM klasa WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Coś się popsuło (błąd usuwania użytkownika)";
    }
}