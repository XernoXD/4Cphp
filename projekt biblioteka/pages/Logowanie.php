<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Autoryzacja </h1>
<form action="?pages=Logowanie" method="POST">
    <table table_layout="fixed">
    <tr>
        <td width="30px"><label for="Login">Login</label></td>
        <td width="70px"><input name="Login" value=""></td>
    </tr>
    <tr>
        <td><label for="password">Haslo</label></td>
        <td><input type="password" name="Haslo" value=""></td>
    </tr>
    <tr>
        <td colspan="2" ><input type="submit" name="submit" value="Zaloguj"></td>
    </tr>
    </table>
</form>
</body>
</html>

