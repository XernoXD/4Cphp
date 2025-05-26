<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
<?php 
   $hostname = "localhost";
   $username = "szpankowski";
   $password = "haslomaslo1";
   $database = "szpankowski";
   $conn = mysqli_connect($hostname, $username,$password, $database);
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());  
}
$query3="SELECT concat(Upper(imie),' ', Upper(nazwisko)) AS pracownik FROM pracownicy";
$result = mysqli_query($conn, $query3);
if (mysqli_num_rows($result) > 0) {
    ?> <ul> <?php while($row = mysqli_fetch_assoc($result)) {?>
     </ul> <li><?= $row['pracownik']?></li>
     <?php 
    }
}
?>
</body>
</html>