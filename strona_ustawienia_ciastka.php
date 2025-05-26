<?php session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'menu.php' ?>
    <h1>Strona Administracyjna</h1>
    <?php if (isset($_SESSION['login_status'])){
    ?>
    <form method="post">
    <label for="title">Nazwa ciastka</label><input type="text" name="title" id="title" value="Ciacho" readonly><BR>
    <label for="disc">Opis ciastków</label><input type="text" name="disc" id="disc" >
<BR>
    <label for="num">Czas do wygaśnięcia</label><input type="number" name="num" id="num" value="60" step="60"  >
    <input type="submit" value="Stwórz ciacho!"> 
</form>
<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $disc = $_POST['disc'];
    $num = $_POST['num'];
    setcookie($title,$disc, time() + $num, "/");
 } 
    ?>
    <?php }
    else {
        ?><p>Musisz być zalogowany aby ustawić ciastko</p> <?php 
    }?>
    <?php include 'stopka.php'?>
    
</body>
</html>