<?php
session_start();
require 'config.php';

if(!isset($_SESSION['user']))
{
 header("Location: pocetna.php");
}
$res=mysql_query("SELECT * FROM prijava WHERE ID_Prijave=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

$id = $_GET['id'];
$query=("SELECT * FROM pregled");
$result=mysql_query($query);
$row=mysql_fetch_array($result);
mysql_query("DELETE from pregled WHERE ID_Pregleda='$id'");
header("location:mojipregledi.php");
	
?>