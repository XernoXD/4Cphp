<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php $servername = 'localhost';
    $username = 'szpankowski';
    $password = 'haslomaslo1';
    $database = 'szpankowski';
    $conn = mysqli_connect($servername, $username ,$password, $database);
    if (!$conn)
    {
echo 'Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd, ' . mysqli_connect_error();

    }
    else
    {
        echo 'Połączono';
    }

    mysqli_close($conn);
    ?>
     <?php
     $querry = 'SELECT tytul, imie, Nazwisko FROM ksiazki';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <p>Książka <?= $row['tytul'] ?>. Została napisana przez <?= $row['Imie'] ?> <?= $row['Nazwisko'] ?></p>
    <?php }
    } else {
        echo 'brak danych';
    }
    ?>
    
</body>
</html>