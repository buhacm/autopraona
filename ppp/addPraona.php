<!DOCTYPE html>
<?php
require 'connect.php';

?>
<?php


if(isset($_POST['submit'])){
	
	$result = mysql_query("select count(1) FROM autopraonica");
$row = mysql_fetch_array($result);

$total = $row[0]+1;

$id=$total;
$Autopraonica=$_POST['naziv'];
$Adresa=$_POST['naziv'];
$Kontakt=$_POST['kontakt'];
$sql = "INSERT INTO autopraonica (id, Autopraonica, Adresa, Kontakt)
VALUES ('$id', '$Autopraonica', '$Adresa', '$Kontakt')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
}

?>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="./css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.css">
		
		<!-- Google Fonts -->
		<link href='./css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='./css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Dodaj Autopraonicu</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						

						

						<div class="form-group">
							<label for="naziv" class="cols-sm-2 control-label">Naziv</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-car fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="naziv" id="naziv"  placeholder="Unesite naziv autopraone"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="adresa" class="cols-sm-2 control-label">Adresa</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-book fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="adresa" id="adresa"  placeholder="Unesite adresu praonice"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="kontakt" class="cols-sm-2 control-label">Kontakt</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="kontakt" id="kontakt"  placeholder="Unesite kontakt"/>
								</div>
							</div>
						</div>

						

						<div class="form-group ">
							<input type="submit" name="submit" onClick="myFunction()" class="btn btn-primary btn-lg btn-block login-button" value="Dodaj"/>
						</div>
						<script>
			function myFunction() {
			alert('Uspjesno ste dodali novu praonicu!');
			window.location = 'index.php'
			}
			</script>
						<div class="login-register">
				            <a class=" btn btn-block btn-lg" href="index.php">Nazad</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="./js/bootstrap.js"></script>
		
	</body>
</html>