<!doctype html>
<html>
<meta charset="utf-8">
<head> 

</head>

<body>
<?php
$servername='localhost';
$username='szpankowski';
$password='haslomaslo1';
$database='szpankowski';
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
    echo 'Próba połączenia z baza danych zakończyła się niepowodzeniem. Błąd: '. mysqli_connect_error();
}
else
{ 
    echo 'Połączono';
}
$ZAP2 = 'SELECT Tytul, Imie, Nazwisko, Wydawnictwo, Miejsce_wyd, Rok_wyd, Objetosc_ks, Cena, Dzialy.Nazwa as Dzial FROM ksiazki inner join Dzialy On Ksiazki.Id_dzial = Dzialy.Id_dzial';
$result = mysqli_query($conn, $ZAP2);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <p>"<?= $row['Tytul'] ?>" - <?= $row['Imie'] ?> <?= $row['Nazwisko'] ?>, wydawnictwo <?= $row['Wydawnictwo'] ?> (<?= $row['Miejsce_wyd'] ?> <?= $row['Rok_wyd'] ?>), <?= $row['Objetosc_ks'] ?> str. Cena <?= $row['Cena'] ?> (dział: <?= $row['Dzial'] ?>). </p>
<?php }
} else {
    echo 'brak danych';
}
?>


<?
mysqli_close($conn); 
?>

</body>
</html>