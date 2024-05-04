<?php

$user_ip = $_SERVER['REMOTE_ADDR'];
$file_content = file_get_contents("ips.txt") or die("Nie można otworzyć pliku");
$lines = explode("\n", $file_content);
foreach ($lines as $line) {
    if ($line == $user_ip) {
        include 'zadanie4/przekierowanie.php';
        return;
    }
    include "zadanie4/domyslna.php";
}
