<?php
include("html_head.php");
require("config.php");
?>

	<div id="prvidiv">
		<div id="drugidiv"></div>
		<div id="trecidiv">Pacijenti</div>
		<div id="cetvrtidiv">Medicinsko osoblje</div>
		<div id="petidiv">Doktori</div>
	</div>

	<script>
		var button1 = document.getElementById("trecidiv");

		button1.addEventListener("click", pacijenti);

		function pacijenti(){
		window.open("login1.php","_self");
		}
	</script>
	<script>
		var button2 = document.getElementById("cetvrtidiv");

		button2.addEventListener("click", osoblje);

		function osoblje(){
		window.open("login2.php","_self");
		}
	</script>
	<script>
		var button3 = document.getElementById("petidiv");

		button3.addEventListener("click", doktori);

		function doktori(){
		window.open("login3.php","_self");
		}
	</script>