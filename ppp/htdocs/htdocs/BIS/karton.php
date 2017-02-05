<?php
session_start();
include("html_head.php");
require 'config.php';

if(!isset($_SESSION['dok']))
{
 header("Location: pocetna.php");
}
$res=mysql_query("SELECT * FROM prijava WHERE ID_Prijave=".$_SESSION['dok']);
$userRow=mysql_fetch_array($res);

?>

<?php
if(isset($_POST['spremi'])){

$ID_Prijave= $_GET['row'];
$Anamneza=$_POST['Anamneza_Status_Nalazi'];
$Dijagnoza=$_POST['Dijagnoza'];
$vol=$_POST['Vrsta_ordiniranog_lijeka'];
$kju = $_POST['Kome_je_upućen'];
$sql = "INSERT INTO pregled (Anamneza_Status_Nalazi, Dijagnoza, Vrsta_ordiniranog_lijeka, Kome_je_upućen)
						VALUES ($Anamneza, $Dijagnoza, $vol, $kju)
						WHERE ID_Pregleda=$ID_Prijave";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
}

?>

<html>
<body>

<div id="devetidiv">
<div>
<div id="krvnagrupa">Krvna grupa: <?php
$id = $_GET['id'];
$res=mysql_query("SELECT * FROM karton WHERE Broj_Kartona=".$id);
while($ispis = mysql_fetch_array($res)){
	echo $ispis['Krvna_Grupa'];
	}
?>
<div id="brkartona">Broj Kartona:
<?php
$id = $_GET['id'];
$res=mysql_query("SELECT * FROM karton WHERE Broj_Kartona=".$id);
while($ispis = mysql_fetch_array($res)){
	echo $ispis['Broj_Kartona'];
	}
?>

</div></div>
<div id="rhfaktor">RH-faktor: 
<?php
$id = $_GET['id'];
$res=mysql_query("SELECT * FROM karton WHERE Broj_Kartona=".$id);
while($ispis = mysql_fetch_array($res)){
	echo $ispis['RH-faktor'];
	}
?></div>
</div>
<div id="border1">
	<div id="Ime">
	
	<?php
$id = $_GET['id'];
$res=mysql_query("SELECT * FROM karton INNER JOIN pacijent ON karton.Broj_Kartona=pacijent.ID_Pacijenta WHERE Broj_Kartona=".$id);
while($ispis = mysql_fetch_array($res)){
	echo $ispis['Ime']." ".$ispis['Prezime'];
	}
?>

<div id="spol"><?php
$id = $_GET['id'];
$res=mysql_query("SELECT * FROM karton INNER JOIN pacijent ON karton.Broj_Kartona=pacijent.ID_Pacijenta WHERE Broj_Kartona=".$id);
while($ispis = mysql_fetch_array($res)){
	echo $ispis['Spol'];
	}
?></div></div>
	<div id="datumr"><?php
$id = $_GET['id'];
$res=mysql_query("SELECT * FROM karton INNER JOIN pacijent ON karton.Broj_Kartona=pacijent.ID_Pacijenta WHERE Broj_Kartona=".$id);
while($ispis = mysql_fetch_array($res)){
	echo $ispis['Datum_rođenja'];
	}
?><div id="bstanje">Bračno stanje:</div></div>
	<div id="mjestos"><?php
$id = $_GET['id'];
$res=mysql_query("SELECT * FROM karton INNER JOIN pacijent ON karton.Broj_Kartona=pacijent.ID_Pacijenta WHERE Broj_Kartona=".$id);
while($ispis = mysql_fetch_array($res)){
	echo $ispis['Adresa'];
	}
?><div id="kupibstanje"><?php
$id = $_GET['id'];
$res=mysql_query("SELECT * FROM karton INNER JOIN pacijent ON karton.Broj_Kartona=pacijent.ID_Pacijenta WHERE Broj_Kartona=".$id);
while($ispis = mysql_fetch_array($res)){
	echo $ispis['Bračno_stanje'];
	}
?></div></div>
</div><form method="POST">
<table id="tablica12">
				<tr>
					<td id="td1">Datum posjete</td>
					<td id="td1">Anamneza, Status i Nalazi</td>
					<td id="td1">Dijagnoza</td>
					<td id="td1">Vrsta ordiniranog lijeka</td>
					<td id="td1">Kome je upućen</td>
				</tr>
				<tr>
					<td><input type="date" id="datePicker1" name="Datum_pregleda"></input></td>
					<td><input type="text" name="Anamneza_Status_Nalazi"></input></td>
					<td><input type="text" name="Dijagnoza"></input></td>
					<td><input type="text" name="Vrsta_ordiniranog_lijeka"></input></td>
					<td><input type="text" name="Kome_je_upućen"></input></td>
				</tr>
			</table><?php
			$id = $_GET['id'];
			$row=$_GET['row'];
			echo "<a href='prijasnjipregledi.php?id=$id&row=$row' id='link2'>Prijašnji pregledi pacijenta</a>";?>
			<input type="submit" name="spremi" id="spremikarton" value="Spremi"></form>
			</div>

</div>
<script>
		var pocetna2 = document.getElementById("pocetna");

		pocetna2.addEventListener("click", vrati2);

		function vrati2(){
		window.open("pocetna.php","_self");
		}
	</script>
	<script>
	document.getElementById("datePicker1").valueAsDate = new Date()
	var today = moment().format('YYYY-MM-DD');
	$('#datePicker1').val(today);
	</script>
	<script>
	document.getElementById("datePicker2").valueAsDate = new Date()
	var today = moment().format('YYYY-MM-DD');
	$('#datePicker2').val(today);
	</script>
</body>
</html>