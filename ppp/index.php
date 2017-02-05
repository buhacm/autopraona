<!DOCTYPE html>
<?php
require 'connect.php';

?>
  <html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  href="css/bootstrap.min.css"  rel="stylesheet">
    <title>LOGO</title>
</head>

  <body>

    <nav  class="navbar navbar-inverse  navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">LOGO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">

		    <button type="submit" class="btn btn-success" style="background-color:#413233;border:0px;"  ><a href="register.php">Register</a></button>
            <button type="submit" class="btn btn-success" style="background-color:#413233;border:0px;"  ><a href="login.html">Sign in</a></button>
          </form>
        </div><!--/.navbar-collapse  <!--LOGIN -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div   class="jumbotron"> 
      <div  class="container">
		<h1> <span class="label label-danger">Autopraonice MOSTAR</span></h1>
        <p style="color:transparent;">Lorem ipsum dolor sit amet, nec no viderer mnesarchum, 
		cum quidam volumus efficiantur ei, qui no alii eirmod. Per elit aeque ut, 
		clita periculis ea vix. Malis commodo accumsan ea mel, atqui noluisse 
		maiestatis ea mel. Habeo idque ut pro. Mel brute utamur vituperata cu, ea usu elit dicunt delicata.</p>
        <p><a class="btn btn-primary btn-lg "  role="button">Pogledajte slobodne termine»</a> <button class="btn btn-default btn-lg pull-right"><a  href="addPraona.php">Dodaj autopraonicu</a></button></p>
      </div>
    </div>

    <div class="container">
		
      <!-- Example row of columns -->
	  <div class="row">
	 <?php 
			$query="SELECT * FROM autopraonica";
			$results = mysql_query($query);

			while ($row = mysql_fetch_array($results)) {
					echo '<div class="col-md-4"><h2>' .$row['Autopraonica']. '</h2><p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					<p><a class="btn btn-default"  role="button" href="Praona'.$row['id'].'.php">Više »</a></p>
          </div>';
		  }

?></div>

      <hr>

      <footer>
        <p>Tomislav Blažević Marko Buhač</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.1.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  

</body></html>