<?php
/**
Ova php skripta služi za postavljanje kolačića. U slučaju na stranici za ulogirat se nije bio označen Zapamti me kolačići
će se izbrisati.
**/
echo "Pozdrav ".$_POST["username"].".";
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo " Kolačići uspješno postavljeni";
} else {
	setcookie("username","");
	setcookie("password","");
	echo " Kolačići nisu postavljeni";
}
?>

<p><a href="Login.php"> Vrati se natrag na logiranje </a> </p>
