<?php


$_name = $_POST["name"];
$_pwd = $_POST["pwd"];

echo "name is ". $_name . "<br>";
echo "pwd is ". $_pwd  . "<br>";
//name

//pwd

//$myfile = fopen("files/ideas/".$_id."a.txt", "a") or die("Unable to open file!");

$file = fopen("files/who_he.txt" ,"a") or die("Unable to open file!");
fwrite($file, "\n" );
fwrite($file,  $_name ." , ". $_pwd );



fclose($file);

echo "<html><body>";
echo "<table><tr><td><img src=\"12hake.jpg\"></td> ";
echo "<td><h2>Welcome to UKHB aka The 1/2 Hakery</h2></td></tr></table>";
echo "<br><br>";
echo "Job done<br>";
echo "Now please go to the <a href=\"home.php\">homepage</a> and  <b>Login</b>";

?>