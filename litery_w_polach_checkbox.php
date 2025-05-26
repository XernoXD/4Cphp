<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 2px solid blue;
        }
        label {
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
    <fieldset><legend>Alfabet</legend>
    <?php 
    foreach (range("a","z") as $letter)
    { ?>
        <input type="checkbox" name="letter[]" id="letter_<?= $letter ?>">
        <label for="letter_<?= $letter ?>"> <?= $letter ?> </label>
    <?php } ?>
    <br><br>
    <input type="submit" value="Wybierz">
</form>
    <p>
     <?php if(isset($_POST['letter'])) {
        $count= count($_POST['letter']);
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