<?php
$iterations = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['number']) && is_numeric($_POST['number']) && $_POST['number'] > 1 && $_POST['number'] == round($_POST['number'])) {
        $number = (int) $_POST['number'];

        function isPrime($num)
        {
            global $iterations;
            if ($num <= 1) {
                return false;
            }

            for ($i = 2; $i <= sqrt($num); $i++) {
                $iterations++;
                if ($num % $i == 0) {
                    return false;
                }
            }

            return true;

        }


        $is_prime = isPrime($number);


        if ($is_prime) {
            echo "$number jest liczbą pierwszą.";
        } else {
            echo "$number nie jest liczbą pierwszą.";
        }
    } else {
        echo "Wprowadź poprawną liczbę całkowitą dodatnią.";
    }
    echo "<br>Liczba iteracji $iterations";
}
?>
