<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
   $hostname = "localhost";
   $username = "szpankowski";
   $password = "haslomaslo1";
   $database = "szpankowski";
   $conn = mysqli_connect($hostname, $username,$password, $database);
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
   $query= "SELECT Sygnatura, Tytul, Imie, Nazwisko, Wydawnictwo, Rok_wyd, Objetosc_ks, Cena, dzialy.Nazwa 
FROM `ksiazki` 
JOIN dzialy on ksiazki.Id_dzial = dzialy.Id_dzial
WHERE objetosc_ks > 500;"
   $result = mysqli_query($conn, $query);
   echo "<h3> Wyświetl książki mające więcej niż 500 stron. Dołącz nazwę działu z jakiego dana książka pochodzi, ale nie wyświetlaj id działu. Posortuj liczby rosnąco według liczby stron. </h3>"
   ; echo "<p> <b> Kolumny: </b> Sygnatura | Tytuł | Autor | Dział | Wydawnictwo | Rok Wydania | Liczba stron | Cena </p>";
   if (mysqli_num_rows($result) > 0) {
    echo "<table> <tr> <th> Sygnatura </th> <th> Tytuł </th> <th> Autor <th>Dział</th> <th>Wydawnictwo</th> <th>Rok Wydabua</th> <th>Liczba stron</th> <th>Cena</th> <tr>"
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>{$row['sygnatura']}</td>
         <td>{$row['tytul']}</td>
          <td>{$row['nazwisko']}</td>
           <td>{$row['wydawnictwo']}</td>
            <td>{$row['rok_wyd']}</td>
             <td>{$row['objetosc_ks']}</td>
              <td>{$row['cena']}</td>
               <td>{$row['dzialy.nazwa']}</td>
        </tr>"
    }
    echo "</table>";
} else {
    echo "Brak wyników"
}
$conn->close();
?>
</body>
</html>