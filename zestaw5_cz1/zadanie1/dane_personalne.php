<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $people_count = $_POST['ilosc'];
}
echo '
<table>
  <thead>
  <tr>
    <td>
      Indeks
    </td>
    <td>
      Imię
    </td>
    <td>
      Nazwisko
    </td>
    <td>
      Wiek
    </td>
  </tr>
  </thead>'
  .$tbody.
'</table>';
