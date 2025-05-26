<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
        }
        </style>
</head>
<body>
<?php 
   $hostname = "localhost";
   $username = "szpankowski";
   $password = "haslomaslo1";
   $database = "szpankowski";
   $conn = mysqli_connect($hostname, $username,$password, $database);
   $zap= "SELECT Nr_transakcji, Data_wypozyczenia, Data_zwrotu, 
DATEDIFF(IFNULL(DATA_ZWROTU, NOW()), Data_wypozyczenia) AS DNI
FROM wypozyczenia
ORDER BY DNI ASC;"
 $result = mysqli_query($conn, $zap); ?>
 <table>
    <tr>
        <th>Numer Transakcji</th>
        <th>Data Wypożyczenia</th>
        <th>Data Zwrotu</th>
        <th>Liczba Dni</th>
</tr>
<?php if (mysqli_num_rows($result) > 0) {
    while ($sql = mysqli_fetch_assoc(result: $result)) {
        ?>
        <td><?= $sql['Nr_transakcji'] ?></td>
        <td><?= $sql['Data_Wypozyczenia'] ?></td>
        <td><?= $sql['Data_zwrotu'] ?></td>
        <td><?= $sql['DNI'] ?></td>
    </tr>
    <?php }
} else {
    echo 'Brak wyników'
}
?>
    </table>
</body>
</html>