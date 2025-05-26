<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Columns</title>
    <style>
        * {
            box-sizing: border-box;
        }
        .column {
            float: left;
            padding: 10px;
           
        }
        .left {
            width: 25%;
            height: 100%;
        }
        .right { 
            width: 75%;
        }
        .row:after {
            content: "";
            display: table;
            clear: both
        }
        .link {
            margin: 2px;
            padding: 10px;
            display: block;
            color: blue;
            text-decoration: none;
        }
        .link:hover {
            color: gray;
        }
        table {
            border-collapse: collapse;
    
        }
        td, th {
            border: 1px solid black;
        }
        </style>
</head>
<body>

    <div class="row">
        <div class="column left" style="background-color:lightblue;">
            <h2><p><a class="link" href="25_27.php">Strona główna</a></p></h2>
            <p><a class="link" href="?pages=czytelnicy">Tabela czytelnicy</a></p>
            <p><a class="link" href="?pages=dzialy">Tabela działy</a></p>
            <p><a class="link" href="?pages=ksiazki">Tabela książki</a></p>
            <p><a class="link" href="?pages=pracownicy">Tabela pracownicy</a></p>
            <p><a class="link" href="?pages=stanowiska">Tabela stanowiska</a></p>
            <p><a class="link" href="?pages=wypozyczenia">Tabela wypożyczenie</a></p>
            <p><a class="link" href="?pages=logowanie">Logowanie</a></p>
    </div>
    <div class="column right" style="background-color:lightpink;">
        <p>
            <?php 
            if (isset($_GET['pages']))
             {
                if (file_exists(filename: 'pages/' . $_GET['pages'] . '.php'))
                {    
                include 'pages/' . $_GET['pages'] . '.php';
                } 
                else 
                {
                    echo '<h1>Nie znaleziono żądanej strony</h1>';

                }
            }   
else {
    include 'pages/glowna.php';
}
?>
</div>
    
</body>
</html>