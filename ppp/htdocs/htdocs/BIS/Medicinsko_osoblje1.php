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

<?php

if(isset($_POST['submit'])){

$Datum=$_POST['Datum_Pregleda'];
$Vrijeme_pregleda = $_POST['Vrijeme_pregleda'];
$Ime = $_POST['Ime'];
$Prezime = $_POST['Prezime'];
$Godina_rođenja = $_POST['Godina_rođenja'];
$Mjesto_stanovanja = $_POST['Mjesto_stanovanja'];
$Broj_Kartona = $_POST['Broj_Kartona'];
$Participacija = $_POST['Participacija'];
$Primjedbe = $_POST['Primjedbe'];
$sql = "INSERT INTO izvjesceoradu (Vrijeme_pregleda, Datum_Pregleda, Ime, Prezime, Godina_rođenja, Mjesto_stanovanja, Broj_Kartona, Participacija, Primjedbe)
VALUES (CAST('". $Vrijeme_pregleda ."' AS TIME), CAST('". $Datum ."' AS DATE), '$Ime', '$Prezime', '$Godina_rođenja', '$Mjesto_stanovanja', '$Broj_Kartona', '$Participacija', '$Primjedbe')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
}

?>



<html>
<body>
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
			<div id="scroll"><table id="tablica10">
				<tr>
					<td id="td1">Vrijeme</td>
					<td id="td1">Datum</td>
					<td id="td1">Ime</td>
					<td id="td1">Prezime</td>
					<td id="td1">Godina rođenja</td>
					<td id="td1">Mjesto</td>
					<td id="td1">BrKartona</td>
					<td id="td1">Participacija</td>
					<td id="td1">Primjedbe</td>
				</tr>
				<tr>
					<td><input type="time" name="Vrijeme_pregleda"></input></td>
					<td><input type="date" id="datePicker1" name="Datum_Pregleda"></input></td>
					<td><input type="text" name="Ime"></input></td>
					<td><input type="text" name="Prezime"></input></td>
					<td><input type="text" name="Godina_rođenja"></input></td>
					<td><input type="text" name="Mjesto_stanovanja"></input></td>
					<td><input type="text" name="Broj_Kartona"></input></td>
					<td><input type="text" name="Participacija"></input></td>
					<td><input type="text" name="Primjedbe"></input></td>
				</tr>
			</table></div>
			<input type="submit" name="submit" id="spremikarton" value="Spremi"></input>
			<div id="link1"><a href=" vidiizvjesca.php" name="link">Vidi sva izvješća o radu</a></div>
			</div></form>
			
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
		var logout = document.getElementById("logout");

		logout.addEventListener("click", odjavi);

		function odjavi(){
		window.open("logout2.php?logout","_self");
		}
	</script>
</body>

</html>