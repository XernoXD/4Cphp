<h1>Edycja wiersza w tabeli dzialy</h1>
<?php
$id_dzial = '0';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars(trim($_POST['Nazwa'])) : '';
    if (isset($_POST['Id_dzial'])) {
        $id_dzial = $_POST['Id_dzial'];
        $query = "UPDATE `dzialy` SET Nazwa='$Nazwa' WHERE Id_dzial=$id_dzial;";
        print_r($query);
    }
    
    if (mysqli_query($conn, $query)) {
        echo ('<h4 class="success">Zaktualizowano dane</h4>');
    } else {
        echo ('<h4 class="failure">Błąd w czasie aktualizacji:</h4>');
        echo mysqli_error($conn);
    }
}
if ($id_dzial == 0) {
    $id_dzial = $_GET['id'];
}
$query2 = "SELECT * FROM `dzialy` WHERE id_dzial = $id_dzial";
$relust2=mysqli_query($conn,$query2);
$row=mysqli_fetch_assoc($relust2);
print_r($row);

?>
<br />
<form action="?pages=edycjawiersza" method="POST">
    <table>
        <tr>
            <td><label for="Id_dzial">Id_dzial</label></td>
            <td><input type="text" name="Id_dzial" readonly value="<?= $row['Id_dzial'] ?? '' ?>"></td>
        </tr>
        <tr>
            <td><label for="Nazwa">Nazwa</label></td>
            <td><input type="text" name="Nazwa" value="<?= $row['Nazwa'] ?? '' ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Zapisz"></td>
        </tr>
    </table>

</form>
<?php print_r($query2)
?>
<p>Powrót do tabeli <a href="?page=dzialy">działy</