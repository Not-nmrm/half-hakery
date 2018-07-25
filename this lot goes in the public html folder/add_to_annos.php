<?php
ob_start();
//$_id =$_GET["id"]; 
//$_id =$_SESSION["id"];
$_id = $_POST["id"];
$_id=trim($_id);
//
//id num?



//


//$_anno = $_POST["anno"];

//echo " anno is" .$_anno ."<br>";

if(isset($_COOKIE["username"])){
$_name_from_cookies=$_COOKIE["username"]   ;
//echo "<h3><br><br><i>Current ideas<br><br>";
} else { 
echo "You are not logged in, or your cookie has expired";
echo "Click <a href =\"home.php\">here </a> to get logged in.";
 }  


//anno
//$_id=trim($_id);
$_anno = $_POST["anno"];

echo " anno is" .$_anno ."<br>";


//$date=

$myfile = fopen("files/ideas/".$_id."a.txt", "a") or die("Unable to open file!");

fwrite($myfile, $_anno);
//fwrite($myfile, " \n <b>". $dt_added. "</b>" );

fwrite($myfile, " \n <b>". $_name_from_cookies. "</b>" );

//
$dt_added= date("Y-m-d ");
fwrite($myfile, " \n".  $dt_added ." \n");
//

fwrite($myfile, " \n");
//echo "\n \n \n ";
fclose($myfile);
echo "Location: reader.php?id=".$_id;
//exit;
header("Location: reader.php?id=".$_id);

//open nums.txt + 1
?>