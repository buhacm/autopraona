<?php
// get the q parameter from URL
$s = $_REQUEST["s"];

$hint = "";
// lookup all hints from array if $q is different from "" 
if ($s !== "") {
    $s = strtolower($s);
    $len=strlen($s);
    /*
	foreach($a as $name) {
        if (stristr($s, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
	
	*/
	

/**********************************************************/
$db = mysql_connect("localhost","root","root");

if($db) {

$result = mysql_select_db("imenik", $db) or die("Došlo je do problema prilikom odabira baze...");
$sql="SELECT * FROM korisnik where brtel LIKE '%$s%' OR prezime LIKE '%$s%'";
echo $sql;
$result2 = mysql_query($sql, $db) or die("Došlo je do problema prilikom izvrsavanja upita...");
$n=mysql_num_rows($result2);
if ($n > 0){
	while ($myrow=mysql_fetch_row($result2)){
			//echo $myrow[0].",".$myrow[1].",".$myrow[2];
			$hint .= "<div name=\"result\" id=\"".$myrow[0]."\">".$myrow[1].",".$myrow[2].",</div>";

		}
	}
else {
//echo "No patern rows returned<br>";
}	
}
else {
echo "<br>Nije proslo spajanje<br>";
}
/**********************************************************/
	
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;

?>