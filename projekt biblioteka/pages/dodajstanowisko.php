<h1>Nowe dane w tabeli stanowiska
<?php
$hostname = "localhost";
$username = "szpankowski";
$password = "haslomaslo1";
$database = "szpankowski";
$conn = mysqli_connect($hostname, $username,$password, $database);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars(trim($_POST['Nazwa'])) : '';
    $query = "INSERT INTO `stanowiska` (Nazwa) VALUES ('" . $Nazwa . "');";
    if (mysqli_query($conn, $query)) {
        echo  ('<h4 class="success">Dodano nowe dane</h4>');
    } else {
        echo ('<h4 class="failure">Błąd w czasie dodawania:</h4>');
        echo mysqli_error($conn);
    }
} else {
    ?>
    <br/>
<form action="?pages=dodajstanowisko" method="POST">
    <table table_layout="fixed">
    <tr>
        <td width="30px"><label for="Id_stanowiska">Id_stanowiska</label></td>
        <td width="70px"><input disabled type="text" name="Id_stanowiska" value=""></td>
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
 
<?php
}
?>
 
<p>Powrót do tabeli <a href="?pages=stanowiska">Stanowiska</a></p>