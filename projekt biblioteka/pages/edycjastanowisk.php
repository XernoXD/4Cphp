<h1> Edycja Stanowisk </h1>
<?php
$hostname = "localhost";
$username = "szpankowski";
$password = "haslomaslo1";
$database = "szpankowski";
$conn = mysqli_connect($hostname, $username,$password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$Id_stanowisko = '0';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars(trim($_POST['Nazwa'])) : '';
    if (isset($_POST['Id_stanowisko'])) {
        $Id_stanowisko = $_POST['Id_stanowisko'];
      
    }
      $query = "UPDATE `stanowiska` SET Nazwa='$Nazwa' WHERE Id_stanowisko = $Id_stanowisko;";
        print_r($query);
    if (mysqli_query($conn, $query)) {
        echo ('<h4 class="success">Zaktualizowano dane</h4>');
    } else {
        echo ('<h4 class="failure">Błąd w czasie aktualizacji:</h4>');
        echo mysqli_error($conn);
    }

if ($Id_stanowisko== 0) {
    $Id_stanowisko= $_GET['Id_stanowisko'];
}
}
$query2 = "SELECT * FROM `stanowiska` WHERE Id_stanowisko= $Id_stanowisko";
$relust2 = mysqli_query($conn, $query2);
$row = mysqli_fetch_assoc($relust2);
print_r($row);

?>
<br />
<form action="?pages=edycjastanowisk" method="POST">
    <table table_layout="fixed">
    <tr>
        <td width="30px"><label for="Id_stanowisko">Id_stanowiska</label></td>
        <td width="70px"><input disabled type="text" name="Id_stanowisk" value=""></td>
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
<p>Powrót do tabeli <a href="?pages=stanowiska">stanowiska</p>