<?php
include("html_head.php");
session_start();
require ("config.php");

if(isset($_SESSION['med'])!="")
{
 header("Location: medicinsko_osoblje1.php");
}
if(isset($_POST['btn-login']))
{
 $Korisnicko_ime = $_POST['Korisnicko_ime'];
 $Lozinka = $_POST['Lozinka'];
 $res="SELECT * FROM prijava WHERE Korisnicko_ime='$Korisnicko_ime' AND ID_Vrste='3'";
 $result=mysql_query($res) or die("<br>".$res."<br/><br/>".mysql_error());
 $row=mysql_fetch_array($result, MYSQL_ASSOC);
 if($Korisnicko_ime!=""&&$Lozinka!=""){
 if($row['Lozinka']==$Lozinka)
 {
  $_SESSION['med'] = $row['ID_Prijave'];
  header("Location: medicinsko_osoblje1.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
}
?>
<html>
<body><div id="prvidiv">
		<div id="drugidiv"></div>
		<div id="text1">Prijavite se</div>
		<form method="POST" id="login-form">
		<div id="sestidiv"><input type="text" name="Korisnicko_ime"id="input1" placeholder="Korisničko ime" onfocus="this.placeholder = ''" 
		onblur="this.placeholder = 'Korisničko ime'" autocomplete="off"></div>
		<div id="password"><input type="password" name="Lozinka" id="lozinka" placeholder="Lozinka" onfocus="this.placeholder = ''" 
		onblur="this.placeholder = 'Lozinka'" ></div>
		<input type="submit" name="btn-login" id="potvrda1" value="Prijava ">
		</form>
	</div>
</body>
</html>