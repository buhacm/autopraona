<?php
include("html_head.php");
session_start();
require 'config.php';

if(!isset($_SESSION['med']))
{
 header("Location: pocetna.php");
}
$res=mysql_query("SELECT * FROM prijava WHERE ID_Prijave=".$_SESSION['med']);
$userRow=mysql_fetch_array($res);
?>


<form method="POST">
	<div id="sedmidiv">
		<div id="osmidiv">Prijavljeni ste kao:
		<?php	
		$s2=$_SESSION['med'];
		$s3=$s2-15;
	$res=mysql_query("SELECT Ime, Prezime FROM medicinskoosoblje WHERE ID_Medicinskog_osoblja=".$s3);
	while($ispis = mysql_fetch_array($res)){
	echo $ispis['Ime']." ".$ispis['Prezime'];
	}
?>
		<div id="logout"></div></div>
		<div id="pozicija1">Izvješće o radu</div>

<table id="tablica11"><tr>
					<th>ID</th>
					<th>Vrijeme</th>
					<th>Datum</th>
					<th>Ime</th>
					<th>Prezime</th>
					<th>Godina rođenja</th>
					<th>Mjesto</th>
					<th>BrKartona</th>
					<th>Participacija</th>
					<th>Primjedbe</th>
				</tr>
<?php
$sql = "SELECT * FROM izvjesceoradu";
	$result=mysql_query($sql);
	while($ispis = mysql_fetch_array($result)){
	echo "<tr value=\"".$ispis['Redni_broj']."\">
		<td>".$ispis['Redni_broj']."</td>
		<td>".$ispis['Vrijeme_pregleda']."</td>
		<td>".$ispis['Datum_Pregleda']."</td>
		<td>".$ispis['Ime']."</td>
		<td>".$ispis['Prezime']."</td>
		<td>".$ispis['Godina_rođenja']."</td>
		<td>".$ispis['Mjesto_stanovanja']."</td>
		<td>".$ispis['Broj_Kartona']."</td>
		<td>".$ispis['Participacija']."</td>
		<td>".$ispis['Primjedbe']."</td>
	</tr>";
	}
?></table>
<div id="link1"><a href="Medicinsko_osoblje1.php" name="link">Vrati se na unos izvješća</a>
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