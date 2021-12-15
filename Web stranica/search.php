<?php
/*
Ovo je obična stranica za pretraživanje. Ako se nešto i upiše neće ništa naći. 
Služi jedino za primjer kako se s XSS mogu ukrastiti kolačići korisniku.
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

echo $_GET['search'];
}
else {

echo "Nema rezultata.";
}
?>
</body>
</html>
