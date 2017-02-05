<?php
include("html_head.php");
session_start();
require 'config.php';

if(!isset($_SESSION['dok']))
{
 header("Location: pocetna.php");
}
$res=mysql_query("SELECT * FROM prijava WHERE ID_Prijave=".$_SESSION['dok']);
$userRow=mysql_fetch_array($res);
?>
<html>
<body>
	<div id="sedmidiv">
		<div id="osmidiv">Prijavljeni ste kao:
		<?php	
		$s=$_SESSION['dok'];
		$s1=$s-10;
	$res=mysql_query("SELECT * FROM doktor WHERE ID_Doktora=".$s1);
	while($ispis = mysql_fetch_array($res)){
	echo $ispis['Ime']." ".$ispis['Prezime'];
	}
?>
		<div id="logout"></div></div>
		<div id="pozicija1">Vaši današnji pregledi</div>
			<table id="tablica">
				<tr>
					<th>Ime</th>
					<th>Prezime</th>
					<th>Vrijeme</th>
				</tr>
				<tr></tr>
				<?php
	$sql = ("SELECT * FROM pregled INNER JOIN pacijent ON pregled.ID_Pacijenta=pacijent.ID_Pacijenta WHERE ID_Doktora=".$s1);
	$result=mysql_query($sql);
	while($ispis = mysql_fetch_array($result)){
	echo "<tr value=\"".$ispis['ID_Pregleda']."\">
		<td>".$ispis['Ime']."</td>
		<td>".$ispis['Prezime']."</td>
		<td>".$ispis['Vrijeme']."</td>
		<td><a class='odjavi' href='karton.php?id=".$ispis['Broj_Kartona']."&row=".$ispis['ID_Pregleda']."'>Karton</a></td>
		<td><a class='odjavi' href='ponisti1.php?id=".$ispis['ID_Pregleda']."'>Otkaži</a></td>
	</tr>";
	}
?>
			<span id="karton"></span></table>
	<script>
		var logout3 = document.getElementById("logout");

		logout3.addEventListener("click", odjavi3);

		function odjavi3(){
		window.open("logout1.php?logout","_self");
		}
	</script>
</body>

</html>