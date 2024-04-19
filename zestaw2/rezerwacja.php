<html>

<head>
    <meta charset="UTF-8">
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guests = $_POST['guests'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $credit_card = $_POST['credit_card'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $arrival_time = $_POST['arrival_time'];
    $child_bed = isset($_POST['child_bed']) ? 'Tak' : 'Nie';
    $amenities = isset($_POST['amenities']) ? implode(', ', $_POST['amenities']) : 'Brak';

    echo "<script> const guests = $guests</script>";
    echo "<h3>Podsumowanie rezerwacji:</h3>";
    echo "<p>Liczba osób: $guests</p>";
    echo "<p>Imię i nazwisko: $name</p>";
    echo "<p>Adres: $address</p>";
    echo "<p>Dane karty kredytowej: $credit_card</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Data pobytu: $date</p>";
    echo "<p>Godzina przyjazdu: $arrival_time</p>";
    echo "<p>Dostawienie łóżka dla dziecka: $child_bed</p>";
    echo "<p>Udogodnienia: $amenities</p>";
}
?>

<body>
    <div>Imiona gości:</div>
    <div id=guestAdditionalInfo></div>
    <div id=guestsForm>
    </div>
    <script>
        var guestFormsContainer = document.getElementById('guestsForm');
        guestFormsContainer.innerHTML = '';
        let guestNames = {}

        for (var i = 1; i <= guests; i++) {
            var guestForm = document.createElement('div');
            guestForm.innerHTML = `
                    <h3>Dodatkowe informacje</h3>
                    <label for="name${i}">Imię:</label>
                    <input type="text" id="name${i}" required>
                    <br><br>
                    <button onClick="addGuestName(${i})">Dodaj imię</button>
                `;
            guestFormsContainer.appendChild(guestForm);
        }

        function addGuestName(idx) {
            const name = document.getElementById('name' + idx).value
            guestNames = {
                ...guestNames,
                [idx]: name
            }
            guestAdditionalInfo = document.getElementById('guestAdditionalInfo')
            guestAdditionalInfo.innerHTML = Object.values(guestNames)
        }
    </script>
</body>

</html>