<html>
<body>
<form method="POST">
    <input type="file" name="file">
    <button type="submit"> prześlij</button>
</form>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['file'])) {
        $file = $_POST['file'];
        while (!feof($file)) {
            $str = fgets($file);
            $str = nl2br($str);
            echo($str);
        }
    }
}
?>
</body>
</html>
