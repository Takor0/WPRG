<html>
<body>
<form>
	<input type="number" name="num">
	<button type="submit"> prześlij</button>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        function silnia($num)
        {
            $res = 1;
            if ($num == 0) return $res;
            $i = 1;
            while ($i <= $num) {
                $res *= $i;
                $i++;
            }
            return $res;
        }

        function silnia_rek($num)
        {
            $res = 1;
            if ($num == 0) return $res;
            return $num * silnia_rek($num - 1);
        }

        function echoTimeExecution($function, $parameters)
        {
            $start_time = microtime(true);

            call_user_func_array($function, $parameters);

            $end_time = microtime(true);

            $execution_time = $end_time - $start_time;
            return $execution_time;

        }

        $execution_time_i = echoTimeExecution('silnia', array($num));
        echo "Czas wykonania funkcji iteracyjnej: " . $execution_time_i . " sekund<br>";

        $execution_time_r = echoTimeExecution('silnia_rek', array($num));
        echo "Czas wykonania funkcji rekurencyjnej: " . $execution_time_r . " sekund<br>";

        if ($execution_time_r > $execution_time_i) {
            echo "<br>Funkcja iteracyjna jest szybsza o " . ($execution_time_r - $execution_time_i) . " sekund";
        } else {
            echo "<br>Funkcja rekurencyjna jest szybsza o " . ($execution_time_i - $execution_time_r) . " sekund";
        }

    }
}
?>
</body>
</html>
