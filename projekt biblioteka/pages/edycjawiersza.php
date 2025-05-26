<h1>Edycja wiersza w tabeli działy </h1> 
<?php 
$hostname = "localhost";
$username = "szpankowski";
$password = "haslomaslo1";
$database = "szpankowski";
$conn = mysqli_connect($hostname, $username,$password, $database);
$ID_DZIAL = 0;
if('REQUEST_METHOD' === 'POST')
{
    $ID_DZIAL = $_POST['ID'];
}
?>
<form action="?pages=dodajdzial" method="POST">
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
<p>Powrót do tabeli <a href="?pages=dzialy">działy</a></p>