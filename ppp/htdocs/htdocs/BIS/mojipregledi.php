<?php
include("html_head.php");
session_start();
require 'config.php';

if(!isset($_SESSION['user']))
{
 header("Location: pocetna.php");
}
$res=mysql_query("SELECT * FROM prijava WHERE ID_Prijave=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<form method="POST">
	<div id="sedmidiv">
		<div id="osmidiv">Prijavljeni ste kao:
		<?php	
	$res=mysql_query("SELECT Ime, Prezime FROM pacijent WHERE ID_Pacijenta=".$_SESSION['user']);
	while($ispis = mysql_fetch_array($res)){
	echo $ispis['Ime']." ".$ispis['Prezime'];
	}
?>
		<div id="logout"></div></div>
		<div id="pozicija1">Izvješće o radu</div>

<table id="tablica11"><tr>
		<td>Vrijeme</td>
		<td>Datum</td>
		<td>Doktor</td>
</tr>

<?php


$res=mysql_query("SELECT * FROM pregled INNER JOIN doktor ON pregled.ID_Doktora=doktor.ID_Doktora WHERE ID_Pacijenta=".$_SESSION['user']);
	while($ispis = mysql_fetch_array($res)){
	echo "<tr value=\"".$ispis['ID_Pregleda']."\">
		<td>".$ispis['Vrijeme']."</td>
		<td>".$ispis['Datum']."</td>
		<td>".$ispis['Ime']." ".$ispis['Prezime']."</td>
		<td><a class='odjavi' href='ponisti.php?id=".$ispis['ID_Pregleda']."'>Otkaži</a></td>
	</tr>";
	}

?>

</table>
<div id="link1"><a href="prijava_termina1.php" name="link">Vrati se na prijavu termina</a>
</div></form>
<script>
		var pocetna2 = document.getElementById("pocetna");

		pocetna2.addEventListener("click", vrati2);

		function vrati2(){
		window.open("pocetna.php","_self");
		}
	</script>
	<script>
		var logout = document.getElementById("logout");

		logout.addEventListener("click", odjavi);

		function odjavi(){
		window.open("logout2.php?logout","_self");
		}
	</script>