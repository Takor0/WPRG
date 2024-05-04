<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['adres']) && !isset($_POST['opis'])) return;
    $filename = "odnosik.txt";
    $adres = $_POST['adres'];
    $opis = $_POST['opis'];

    $odnosik = sprintf("http://%s/;%s", $adres, $opis);
    touch($filename);
    file_put_contents($filename, file_get_contents($filename) . $odnosik . "\n");
    echo nl2br(file_get_contents($filename));
}
