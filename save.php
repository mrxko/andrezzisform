<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nev = $_POST["nev"];
    $email = $_POST["email"];
    
    // Itt lehetne megtenni az adatok mentését, például fájlba vagy adatbázisba írás formájában
    
    echo "Az adatok sikeresen feldolgozva: Név: $nev, Email: $email";
}
?>
