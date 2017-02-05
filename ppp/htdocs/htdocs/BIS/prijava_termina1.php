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

<?php


if(isset($_POST['submit'])){

$value = mysql_real_escape_string($_POST['selectdoktor']);
$br=$_SESSION['user'];
$ID_Pacijenta=$br;
$Broj_Kartona=$br;
$Datum=$_POST['date'];
$vrijeme = $_POST['time'];
$sql = "INSERT INTO pregled (Vrijeme, Broj_Kartona, ID_Pacijenta, Datum, ID_Doktora)
VALUES ('$vrijeme', $Broj_Kartona, $ID_Pacijenta, CAST('". $Datum ."' AS DATE), '$value')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
}

?>

<html>
<body><form method="POST">
	<div id="sedmidiv">
		<div id="osmidiv">Prijavljeni ste kao:
		<?php	
	$res=mysql_query("SELECT Ime, Prezime FROM pacijent WHERE ID_Pacijenta=".$_SESSION['user']);
	while($ispis = mysql_fetch_array($res)){
	echo $ispis['Ime']." ".$ispis['Prezime'];
	}
?>
		<div id="logout"></div></div>
		<div id="Odaberitedoktora">Odaberite doktora:
		<select name="selectdoktor">
						<option></option>
<?php
session_start();
require 'config.php';
if(!isset($_SESSION['user']))
{
 header("Location: pocetna.php");
}
$res=mysql_query("SELECT * FROM prijava WHERE ID_Prijave=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$sql = "SELECT * FROM doktor";
	$result=mysql_query($sql);
	while($ispis = mysql_fetch_array($result)){
	echo "<option value=\"".$ispis['ID_Doktora']."\">dr.".$ispis['Ime']." ".$ispis['Prezime']."</option>";
	}
?>
</select><br><br></div>
		<div id="Odaberitedatum">Odaberite datum:
		<input type="date" id="datePicker" name="date">
		</div>
		<div id="Odaberitevrijeme">Odaberite vrijeme:
		<select id="selectvrijeme" name="time">
		<option>08:00</option>
		<option>09:00</option>
		<option>10:00</option>
		<option>11:00</option>
		<option>12:00</option>
		<option>13:00</option>
		<option>14:00</option>
		</select></div>
		<input type="submit" name="submit" id="spremikarton" value="Spremi"></input>
		
		<div id="link1"><a href="mojipregledi.php">Moji	dogovoreni pregledi</a></div>
		
	</div></form>

	<script>
	document.getElementById("datePicker").valueAsDate = new Date()
	var today = moment().format('YYYY-MM-DD');
	$('#datePicker').val(today);
	</script>
	<script>
		var pocetna1 = document.getElementById("pocetna");

		pocetna1.addEventListener("click", vrati);

		function vrati(){
		window.open("pocetna.php","_self");
		}
	</script>
	<script>
		var logout = document.getElementById("logout");

		logout.addEventListener("click", odjavi);

		function odjavi(){
		window.open("logout.php?logout","_self");
		}
	</script>

		
	</body>
</html>