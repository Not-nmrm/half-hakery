<?php
ob_start();
//$_id =$_GET["id"]; 
$_id = $_GET["id"];
//$_id =$_SESSION["id"];
//ob_start();
if(isset($_COOKIE["username"])){
$_name_from_cookies=$_COOKIE["username"]   ;
//echo "<h3><br><br><i>Current ideas<br><br>";
} else { 
echo "You are not logged in, or your cookie has expired";
echo "Click <a href =\"home.php\">here </a> to get logged in.";
 }  


//anno
$_id = $_POST["id"];
$_id=trim($_id);

//bits
//$bits = explode(",", $my_array);
//$_ho_hum1=trim($bits[0]);
//$_ho_hum2=trim($bits[1]);
//end of bits

$dt_added= date("Y-m-d ");


$_blurb = $_POST["blurb"];
$_blurb=trim($_blurb);
$_link= $_POST["link"];
$_link=trim($_link);



$myfile = fopen("files/ideas/".$_id."l.txt", "a") or die("Unable to open file!");
//fwrite($myfile, "---------------<br> ");
fwrite($myfile, $_link . " | " . $_blurb ." | " .$_name_from_cookies ." | ".$dt_added. "\n ");

//echo "\n \n \n ";
fclose($myfile);
header("Location: reader.php?id=".$_id);
//open nums.txt + 1
?>