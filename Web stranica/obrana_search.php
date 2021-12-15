<?php
/*
Ovo je obična stranica za pretraživanje. Ako se nešto i upiše neće ništa naći. 
Služi jedino za primjer kako se s XSS mogu ukrastiti kolačići korisniku. Ovaj kod je 
zaštičen od XSS-a.
*/
?>
<html>
<head>
<title>WEB aplikacija podložna XSS napadu</title>
</head>
<body>
<form action="">
Search: <input type="text" name="search" size="60">
<input type="Submit" name="Submit" value="Search"><br /><br />
</form>
<?php if(isset($_GET['search'])){

$search = strip_tags($_GET['search']);//pametno je prije korištenja unesenih podataka sanirat unos.
// pošto ovdje se očekuje kao unos običan tekst možemo jednostavno s funkcijom strip_tags maknut
// sve nmoguće neželjene dijelove unosa
echo htmlspecialchars($search);//prije prikazivanja podataka dobro je zamjenu (eng. escape) napraviti.
//time smo sigurni da preglednik neće dati nekim znakovima posebno značenje te izvršit neki nepoznati kod
}
else {
echo "Nema rezultata.";
}

?>
</body>
</html>
