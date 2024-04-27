<html>
<body>
<form>
	<input type="date" name="birth_date">
	<button type="submit"> prześlij</button>
</form>
<?php
$daysOfWeek = array(
    1 => "Poniedziałek",
    2 => "Wtorek",
    3 => "Środa",
    4 => "Czwartek",
    5 => "Piątek",
    6 => "Sobota",
    7 => "Niedziela"
);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['birth_date'])) {
        $birth_date = date_create($_GET['birth_date']);
				$today = date_create(date("Y-m-d"));

				if ($today < $birth_date) {
					echo "Data musi być z przyszłości!";
					return;
				}

        $diff = date_diff($birth_date, $today);
        echo "Ukończone lata: " . $diff->format('%y') . "<br>";
				$weekNum = $birth_date->format('N');
        echo "Dzień tygodnia: " . $daysOfWeek[$weekNum] . "<br>";
				echo "Ilość dni do najbliższych urodzin: " . (365 - ($diff->days % 365)) + 1;
    }
}
?>
</body>
</html>
