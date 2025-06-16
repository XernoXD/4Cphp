<h1>Edycja wiersza w tabeli dzialy</h1>
<?php
$hostname = "localhost";
$username = "szpankowski";
$password = "haslomaslo1";
$database = "szpankowski";
$conn = mysqli_connect($hostname, $username,$password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id_dzial = '0';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars(trim($_POST['Nazwa'])) : '';
    if (isset($_POST['Id_dzial'])) {
        $id_dzial = $_POST['Id_dzial'];
      
    }
      $query = "UPDATE `dzialy` SET Nazwa='$Nazwa' WHERE Id_dzial = $id_dzial;";
        print_r($query);
    if (mysqli_query($conn, $query)) {
        echo ('<h4 class="success">Zaktualizowano dane</h4>');
    } else {
        echo ('<h4 class="failure">Błąd w czasie aktualizacji:</h4>');
        echo mysqli_error($conn);
    }

if ($id_dzial== 0) {
    $id_dzial= $_GET['Id_dzial'];
}
}
$query2 = "SELECT * FROM `dzialy` WHERE Id_dzial= $id_dzial";
$relust2 = mysqli_query($conn, $query2);
$row = mysqli_fetch_assoc($relust2);
print_r($row);

?>
<br />
<form action="?pages=edycjawiersza" method="POST">
    <table table_layout="fixed">
    <tr>
        <td width="30px"><label for="Id_dzial">Id_dzial</label></td>
        <td width="70px"><input disabled type="text" name="Id_dzial" value=""></td>
    </tr>
    <tr>
        <td><label for="Nazwa">Nazwa</label></td>
        <td><input type="text" name="Nazwa" value=""></td>
    </tr>
    <tr>
        <td colspan="2" ><input type="submit" name="submit" value="Zapisz"></td>
    </tr>
    </table>
 
</form>
<?php print_r($query2)
?>
<p>Powrót do tabeli <a href="?pages=dzialy">działy</p>