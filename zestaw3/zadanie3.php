<html>
<body>
<form>
	<label for="path">Path:</label><br>
	<input type="text" name="path" id="path"><br>
	<label for="filename">Filename:</label><br>
	<input type="text" name="filename" id="filename"><br>
	<label for="arg">Argument:</label><br>
	<select name="arg" id="arg">
		<option value="-read" selected>-read</option>
		<option value="-delete">-delete</option>
		<option value="-create">-create</option>
	</select><br>
	<button type="submit">Prześlij</button>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {


    $path = $_GET['path'];
    $filename = $_GET['filename'];
    if (strpos($path, '..') !== false) {
        echo "Zła ścieżka!";
        return;
    }
    $path = './' . $path;
    $full_path = $path . '/' . $filename;
    switch ($_GET['arg']) {
        case "-read":
            foreach (glob($path . '/*') as $filename) {
                echo "$filename" . "<br>";
            }
            break;
        case "-delete":
            $status = rmdir($full_path);
            echo $status ? "Usunięto plik" : "Nie udało się usunąć pliku";
            break;
        case "-create":
            $status = mkdir(
                $full_path,
                $permissions = 0777,
                $recursive = true,
            );
            echo $status ? "Utworzono plik" : "Nie udało się utworzyć pliku";
            break;
        default:
            echo "Błąd: nieznana operacja";
    }
}
?>
</body>
</html>
