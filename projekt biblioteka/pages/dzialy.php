
<h1>Tabela <i>książki</i></h1>
<?php 
$hostname = "localhost";
$username = "szpankowski";
$password = "haslomaslo1";
$database = "szpankowski";
$conn = mysqli_connect($hostname, $username,$password, $database);
$sql = "select count(Nazwa) as liczba from dzialy;";
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
$sql = "select * from dzialy;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>
<tr>
    <th>Nazwa</th>
    <th>Id_dział</th>
    <td><a class="plus" href="?pages=dodajdzial">&#43;</a></td>


</tr> 

<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
<td><?= $row["Nazwa"]?></td>
    <td><?= $row["Id_dzial"]?></td>
    <td><a class="edit" href="?pages=edycjawiersza">X</td>
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