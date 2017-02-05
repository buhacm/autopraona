<!DOCTYPE html>

<?php
require 'connect.php';

?>
<?php


if(isset($_POST['submit'])){
	
	$sql = mysql_query("select count(1) FROM korisnik");
$row = mysql_fetch_array($sql);

$total = $row[0]+1;

$id=$total;
$Korisnik=$_POST['name'];
$Email=$_POST['email'];
$Kontakt=$_POST['kontakt'];
$sql = "INSERT INTO korisnik (id, Korisnik, mail, kontakt)
VALUES ('$id', '$Korisnik', '$Email', '$Kontakt')";

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
	               		<h1 class="title">Autopraonice Mostar</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Ime korisnika</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Unesi svoje ime"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Unesi Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="kontakt" class="cols-sm-2 control-label">Kontakt</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="kontakt" id="kontakt"  placeholder="Kontakt podaci"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Register"/>
						</div>
						<div class="login-register">
				            <a href="index.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="./js/bootstrap.js"></script>
		
	</body>
</html>