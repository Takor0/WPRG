<html lang="en">

<head>
    <title>Prosty Kalkulator</title>
</head>

<body>
    <form method="post" action="">
        <label for="num1">Liczba 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Liczba 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <label for="operator">Działanie:</label>
        <select id="operator" name="operator" required>
            <option value="+">Dodawanie</option>
            <option value="-">Odejmowanie</option>
            <option value="*">Mnożenie</option>
            <option value="/">Dzielenie</option>
        </select>
        <br><br>
        <button type="submit">Oblicz</button>
    </form>

    <?php

    function kalkulator($num1, $num2, $operator)
    {
        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 == 0) {
                    return "Błąd: próba dzielenia przez zero!";
                } else {
                    return $num1 / $num2;
                }
            default:
                return "Nieznane działanie";
        }
    }

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (is_numeric($num1) && is_numeric($num2)) {
        $res = kalkulator($num1, $num2, $operator);
        echo "<p>Wynik: $res</p>";
    }
    ?>

</body>

</html>