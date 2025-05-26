<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    
<h1>Tabela <i>wypozyczenia</i></h1>
<?php 
$hostname = "localhost";
$username = "szpankowski";
$password = "haslomaslo1";
$database = "szpankowski";
$conn = mysqli_connect($hostname, $username,$password, $database);
$sql = "select count(Nr_transakcji) as liczba from wypozyczenia;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
while($row = mysqli_fetch_assoc($result)) {
    ?>
<p>Tabela ma <?= $row["liczba"]?> wierszy</p>
<?php
}
} else {
echo "Nie ma";
}
?>

<table>
<?php
$sql = "select * from wypozyczenia;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<tr>
    <th>Nr_transakcji</th>
    <th>Sygnatura</th>
    <th>Id_pracownika</th>
    <th>Nr_czytelnika</th>
    <th>Data_wypozyczenia</th>
    <th>Data_zwrotu</th>

</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Nr_transakcji"]?></td>
    <td><?= $row["Sygnatura"]?></td>
    <td><?= $row["Id_pracownika"]?></td>
    <td><?= $row["Nr_czytelnika"]?></td>
    <td><?= $row["Data_wypozyczenia"]?></td>
    <td><?= $row["Data_zwrotu"]?></td>

</tr>   

<?php
}
} else {
echo "Nie ma";
}
?>

</table>
</body>
</html>