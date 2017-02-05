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

    <nav  class="navbar navbar-inverse navbar-fixed-top">
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
        
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div   class="jumbotron"> 
      <div  class="container">
        <h1 style="color:red;">Blistava</h1>
        <p style="color:transparent;">Lorem ipsum dolor sit amet, nec no viderer mnesarchum, 
		cum quidam volumus efficiantur ei, qui no alii eirmod. Per elit aeque ut, 
		clita periculis ea vix. Malis commodo accumsan ea mel, atqui noluisse 
		maiestatis ea mel. Habeo idque ut pro. Mel brute utamur vituperata cu, ea usu elit dicunt delicata.</p>
         </div>
    </div>

    <div class="container">
			<h2 class="sub-header">Zauzeti termini</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id rezervacije</th>
                  <th>Termin</th>
                  <th>Vrsta Pranja</th>
                              
                </tr>
              </thead>
              <tbody>
                <?php
					$sql = ("SELECT * FROM vrsta_pranja v INNER JOIN rezervacija r ON v.id=r.idPranja WHERE r.Idpraone=1");
					$result=mysql_query($sql);
					while($ispis = mysql_fetch_array($result)){
						echo "<tr>
								<td>".$ispis['id']."</td>
								<td>".$ispis['Vrijeme']." , ".$ispis['Datum']."</td>
								<td>".$ispis['Vrsta_pranja']."</td>
							</tr>";
					}
				?>
				</tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
      

      <hr>

      <footer>
        <p>Tomislav Blaževic Marko Buhač</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Jumbotron Template for Bootstrap_files/jquery.min.js.download"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Jumbotron Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Jumbotron Template for Bootstrap_files/ie10-viewport-bug-workaround.js.download"></script>
  

</body></html>