<?php
session_start();

if(!isset($_SESSION['med']))
{
 header("Location: pocetna.php");
}
else if(isset($_SESSION['med'])!="")
{
 header("Location: pocetna.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['med']);
 header("Location: pocetna.php");
}
?>