<?php
ob_start();
$_name=$_POST["username"];
$_pwd=$_POST["pwd"];

//username
//pwd
$_kosher=0;

$_name=trim($_name);
$_pwd=trim($_pwd);
//$_pwd="cheese";
//$_pwd=$_POST["pwd"];
//echo " name is " . $_name. " pwd is " . $_pwd;

//$file = fopen("files/" ."who_he.txt","r");
//this bit
$file = fopen("../../batch/" ."who_he.txt","r");
//end of this bit

$z=0;

while(! feof($file))

  {  //while
//$_points=0;
  $_sd[$z] =fgets($file) ;
//echo  $_sd[$z] . "<br>---I---------------I---<br>";
$z++;
} //end while

//echo "end of getting them out of a file----------------------------<br>";
$stop=0;

$z =$z -1;

for ($x = 0; $x <= $z ; $x++) {
$points=0;
$my_array=$_sd[$x];


$bits = explode(",", $my_array);

$_ho_hum1=trim($bits[0]);
$_ho_hum2=trim($bits[1]);
//$_ho_hum2="dunnomate";

if( $_name === $_ho_hum1 and $_ho_hum2 === $_pwd ){

echo "yep, you are " . $_name . " phew <br>";

$_kosher=1;


setcookie("username", $_name , time()+ 30*24*60*60);
if(isset($_COOKIE["username"])){
//echo "Hi ". $_COOKIE["username"];
//echo "<br>";
//echo $_COOKIE["username"];
//echo " Click <a href =\"home.php\">here </a>";
}   //end if cookie set                                                      

}//endif



}  //endfor

header("Location: home.php");

?>