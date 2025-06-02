<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Tabela <i>stanowiska</i></h1>
<?php 
$hostname = "localhost";
$username = "szpankowski";
$password = "haslomaslo1";
$database = "szpankowski";
$conn = mysqli_connect($hostname, $username,$password, $database);
$sql = "select count(Id_stanowisko) as liczba from stanowiska;";
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
$sql = "select * from stanowiska;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<tr>
    <th>Id_stanowisko</th>
    <th>Nazwa</th>
     <td><a class="plus" href="?pages=dodajstanowisko" >&#43;</a></td>
    

</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Id_stanowisko"]?></td>
    <td><?= $row["Nazwa"]?></td>
    <td><a class="delete" href="?pages=usuwanie">-</td><td><a class="edit" href="?pages=edycjastanowisk">O</td>
   
    

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