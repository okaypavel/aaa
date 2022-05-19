<?php
$numer = $_POST['numer'];
$jeden = $_POST['jeden'];
$dwa = $_POST['dwa'];
$trzy = $_POST['trzy'];
$on = mysqli_connect('localhost', 'root', '', 'ee09');
$q = "INSERT INTO ratownicy VALUES (NULL, '$numer', '$jeden', '$dwa', '$trzy')";
if ($numer == true && $jeden == true && $dwa == true && $trzy == true) {
    $go = mysqli_query($on, $q);
    echo "Do bazy zostało wysłane zapytanie: " . " " . $q;
} else {
    echo "Nie";
}
mysqli_close($on);
