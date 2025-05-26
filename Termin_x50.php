<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    fieldset {
            border: 1px solid lightgray;
        }
        label {
            margin-right: 5px;
        }
    </style>
</head>
<body>  
    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
    <fieldset><legend>Terminy</legend>
    <?php 
    foreach (range("1","50") as $date)
    { ?>
        <input type="checkbox" name="date[]" id="date_<?= $date ?>">
        <label for="date_<?= $date ?>"> <?= $date ?> </label>
    <?php } ?>
    <br><br>
    <input type="submit" value="Wybierz">
</form>
    <p>
     <?php if(isset($_POST['date'])) {
        $count= count($_POST['date']);
        if($count===1) {
            echo 'jedna';
        } else {
            echo 'wiele';
        }
        
     } else {
        echo "Nie wybrano żadnej litery.";
     } ?>
    </p>
</fieldset>
</body>
</html>
    
</body>
</html>