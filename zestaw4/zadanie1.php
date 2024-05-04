<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['user-file'])) {
        $filename = $_FILES['user-file']['tmp_name'];
        $file_content = file_get_contents($filename);
		$lines = explode("\n", $file_content);
        $lines = array_reverse($lines);
        file_put_contents($filename, implode("\n", $lines));
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($_FILES['user-file']['name']) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
    }
}