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
<form method="POST">
<div id="devetidiv">
<table id="tablica13">
				<tr>
					<td id="td1">Datum posjete</td>
					<td id="td1">Anamneza, Status i Nalazi</td>
					<td id="td1">Dijagnoza</td>
					<td id="td1">Datum ordiniranog lijeka</td>
					<td id="td1">Vrsta ordiniranog lijeka</td>
					<td id="td1">Kome je upućen</td>
				</tr>
				<?php
$sql = "SELECT * FROM pregled INNER JOIN karton ON pregled.Broj_Kartona=karton.Broj_Kartona";
	$result=mysql_query($sql);
	while($ispis = mysql_fetch_array($result)){
	echo "<tr value=\"".$ispis['ID_Pregleda']."\">
		<td>".$ispis['Datum_Pregleda']."</td>
		<td>".$ispis['Anamneza_Status_Nalazi']."</td>
		<td>".$ispis['Dijagnoza']."</td>
		<td>".$ispis['Datum_ordiniranog_lijeka']."</td>
		<td>".$ispis['Vrsta_ordiniranog_lijeka']."</td>
		<td>".$ispis['Kome_je_upućen']."</td>
	</tr>";
	}
	
?>
			
			</table><?php
			$id = $_GET['id'];
			$row= $_GET['row'];
			echo "<a href='karton.php?id=$id&row=$row' id='link2'>Vrati se na karton</a>";?>
			</div></form>

</div>