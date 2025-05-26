<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Tabela <i>Pracownicy</i></h1>
<?php 
$hostname = "localhost";
$username = "szpankowski";
$password = "haslomaslo1";
$database = "szpankowski";
$conn = mysqli_connect($hostname, $username,$password, $database);
$sql = "select count(Id_pracownika) as liczba from pracownicy;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
while($row = mysqli_fetch_assoc($result)) {
    ?>
<p>Tabela ma <?= $row["liczba"]?> wierszy</p>
<?php
}
} else {
echo "nie ma";
}
?>

<table>
<?php
$sql = "select * from pracownicy;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<tr>
    <th>Id_pracownika</th>
    <th>Nazwisko</th>
    <th>Imie</th>
    <th>Id_stanowisko</th>
    <th>Miasto</th>
    <th>Data_zatrudnienia</th>
    <th>Wynagrodzenie</th>

</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
<tr>
    <td><?= $row["Id_pracownika"]?></td>
    <td><?= $row["Nazwisko"]?></td>
    <td><?= $row["Imie"]?></td>
    <td><?= $row["Id_stanowisko"]?></td>
    <td><?= $row["Miasto"]?></td>
    <td><?= $row["Data_zatrudnienia"]?></td>
    <td><?= $row["Wynagrodzenie"]?></td>

</tr>   

<?php
}
} else {
echo "nie ma";
}
?>

</table>
</body>
</html>