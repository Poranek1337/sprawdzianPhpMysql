<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "2a";
$connection = @mysqli_connect($host, $username, $password, $database);
?>

//jezeli uzytkownik wpisal ID osoby ktora znajduje sie w bazie danych to wyswietl mu formularz z danymi tej osoby
//jezeli uzytkownik wpisal ID osoby ktora nie znajduje sie w bazie danych to wyswietl mu komunikat o bledzie

<php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM klasa WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $imie = $row['imie'];
            $nazwisko = $row['nazwisko'];
            $data = $row['data'];
            echo "<form action='editUserAction.php' method='post'>";
            echo "<input type='text' name='imie' value='$imie' required>";
            echo "<input type='text' name='nazwisko' value='$nazwisko' required>";
            echo "<input type='date' name='data' value='$data' required>";
            echo "<input type='hidden' name='id' value='$id'>";
            echo "<input type='submit' name='submit' value='edytuj'>";
            echo "</form>";
        } else {
            echo "failed to edit User";
        }
    }
