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
   $zap= 'SELECT Sygnatura, Tytul, Imie, Nazwisko, Wydawnictwo, Rok_wyd, Cena 
FROM ksiazki 
WHERE Rok_wyd > 1990 and rok_wyd < 2011
AND Wydawnictwo = "PWN" or Wydawnictwo = "Helion";'
$result = mysqli_query($conn, $zap); ?>
<table>
    <tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania<th>
            <th> Cena </th>
        
</tr>
<?php if (mysqli_num_rows($result) > 0) {
    while ($sql = mysqli_fetch_assoc(result: $result)) {
        ?>
        <td><?= $sql['Sygnatura'] ?></td>
        <td><?= $sql['Tytul'] ?></td>
        <td><?= $sql['Imie'] ?></td>
        <td><?= $sql['Nazwisko'] ?></td>
        <td><?= $sql['Wydawnictwo'] ?></td>
        <td><?= $sql['Rok_wyd'] ?></td>
        <td><?= $sql['Cena'] ?></td>
    </tr>
    <?php }
} else {
    echo 'Brak wyników'
}
?>
</table>
</body>
</html>