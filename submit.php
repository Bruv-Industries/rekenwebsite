<?php


$onderwerp = $_POST["Onderwerp"];
$naam = $_POST["Naam"];
$rol = $_POST["Rol"];
$inhoud = $_POST["Inhoud"];
$email = $_POST["email"];
$telefoonnummer =$_POST["telefoonnummer"]





?>

<html>
<head>
    <title>submit pagina contact</title>
</head>

<body>

<h1><?php echo $naam?>, bedankt voor het invullen van het contactformulier</h1>

<h2>Gekozen onderwerp: </h2> 
<?php echo $onderwerp; ?>

<h2>Je rol is: </h2>
<?php 

if($rol == "Leerling")
{
	echo "Leerling" ;
}
elseif ($rol == "Ouder/verzorger")
{
	echo "Ouder/verzorgers" ;
}
elseif ($rol == "Bedrijf")
{
	echo "Bedrijf" ;
}
elseif ($rol == "Opvangsverblijf")
{
	echo "Opvangsverblijf" ;
}
else 
{
	echo "Anders" ;
} 
?>
<h2>Uw Email:</h2>
<?php echo $email; ?>
<h2>Dit is je inhoud: </h2>
<p><?php echo $inhoud; ?> </p>
<h2>Uw telefoonnummer:</h2>
<p><?php echo $telefoonnummer?></p>


</body>





</html>