<?php
//jezeli uztykownik wypelnil formularz ze zmiana danych to wykonaj poniższy kod to zmien rekord w bazie danych

if (isset($_POST['submit'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data = $_POST['data'];
    $id = $_POST['id'];
    $sql = "UPDATE klasa SET imie = '$imie', nazwisko = '$nazwisko',
    data = '$data' WHERE id = $id";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Failed to edit user";
    }