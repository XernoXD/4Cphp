<?php
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $name = $_POST['name'];
    $value = $_POST['value'];
    $expire = intval($_POST['expire']);
    
    // echo $expire;

    $success = setcookie($name, $value, time() + $expire, "/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <?= %success ? '<div><mark>Ciasteczko zostało ustawione</mark></div>' ; '' ?>
</body>
</html>
