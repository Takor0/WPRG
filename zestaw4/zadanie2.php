<?php
$counter_file = "licznik.txt";
touch($counter_file);
$counter_str = file_get_contents($counter_file);
if (is_numeric($counter_str)) {
    $counter = (int)$counter_str + 1;
} else {
    $counter = 1;
}


file_put_contents($counter_file, $counter);
echo $counter

?>