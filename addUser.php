<?php
require_once "connection.php";

if (isset($_POST['submit'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data = $_POST['data'];
    $query = "INSERT INTO klasa (imie, nazwisko, data) VALUES ('$imie', '$nazwisko', '$data')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Coś się popsuło (błąd dodawania użytkownika)";
    }
}

//możesz już brać