<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biuro turystyczne</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
<h1>Witryna internetowa</h1>
<nav>
<ul>
    <li><a href="wczasy.html">Wczasy</a></li>
    <li><a href="wycieczki.html">Wycieczki</a></li>
    <li><a href="allinclusive.html">All inclusive</a></li>
</ul>
</nav>
</header>
<main>
<aside>
    <h2>Twój cel wyprawy</h2>
    <form method="post" action="skrypt1.php">
    <label>Miejsce wycieczki<br>
    <select name="miejsce">
    <option>Brno</option>
    <option>Gdańsk</option>
    <option>Malbork</option>
    <option>Gdynia</option>
    
</select>
</label><br>
 <label>Ile dorosłych?<br>
 <input type="number" name="dorosli" min="1" value="1">
 </label><br>
 <label>Ile dzieci?<br>
 <input type="number" name="dzieci" min="0" value="0">
 </label><br>
 <label>Termin<br>
<input type="date" name="termin">
 </label><br>
 <input type="submit" value="Symulacja ceny">
 </form>
<h2>Koszt wycieczki</h2>
</aside>
<section>
<h2>Wycieczki</h2>
<div class="wycieczka">
<h3>Malbork</h3>
<p>2000.00</p>
<img src="01.jpg" alt="Malbork">
 </div>
<div class="wycieczka">
<h3>Gdańsk</h3>
<p>2100.00</p>
<img src="03.jpg" alt="Gdańsk">
</div>
<div class="wycieczka">
<h3>Gdynia</h3>
<p>3250.00</p>
<img src="04.jpg" alt="Gdynia">
</div>
<div class="wycieczka">
<h3>Rzym</h3>
<p>4500.00</p>
<img src="05.jpg" alt="Rzym">
 </div>
 </section>
</main>
<footer>
<p>Autor: 0000000000</p>
</footer>
</body>
</html>