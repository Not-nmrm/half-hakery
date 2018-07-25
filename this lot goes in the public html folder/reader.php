<?php
ob_start();
error_reporting(0);

//id num?


$_id = $_GET['id'];
//$_id=2;


$verdammitID=$_id;
//echo " $verdammitID is ". $_id;

//if($_id =""){
//echo "oops";
//$_id =$_SESSION["id"];
//echo $_SESSION["id"] . "the session id";
//exit;
//}
//echo "something";

echo "<html><body>";
echo "<table><tr><td><img src=\"12hake.jpg\"></td> ";
echo "<td><h2>Welcome to UKHB aka The 1/2 Hakery</h2></td></tr></table>";


echo "<br><table border=0>";
echo "<tr><td width=25% valign=top>";
//echo "links go here";
//oh blimey
$file = fopen("files/ideas/".$verdammitID."l.txt", "r") or die("Unable to open file  1 !");
$z=0;

while(! feof($file))
 {

  $_sd[$z] =fgets($file) ;
$bits = explode("|", $_sd[$z]);
$_ho_hum1=trim($bits[0]);
$_ho_hum2=trim($bits[1]);
$_ho_hum3=trim($bits[2]);
$_ho_hum4=trim($bits[3]);
//echo $_ho_hum1 ."and " . $_ho_hum2;
//echo 
//from p_link
echo"<li><a href=http://";
echo $_ho_hum1;
echo ">";
echo $_ho_hum1 ;
echo "</a></li>" ;
echo $_ho_hum2;
echo "<br><b>".$_ho_hum3."</b>" ;
//echo "<br>".$_ho_hum4."</b>" ;
echo "<br>".$_ho_hum4."</b>" ;
//echo "<br>". $_ho_hum3;
//end of from plink


$z++;

  }
fclose($file);








echo "<br><br>Add a link<br>";
echo "<i>e.g. www.google.com</i><br>";
echo "<form action=\"add_to_links.php\" method=\"post\">";
echo"<textarea rows=\"1\" cols=\"15\" name=\"link\" >";
echo"</textarea><br>";
echo "Description<br>";
echo"<textarea rows=\"1\" cols=\"15\" name=\"blurb\" >";
echo"</textarea><br><br>";
echo" <input type=\"hidden\" name=\"id\" value=";
echo $verdammitID;
echo ">";


echo"<input type=\"submit\" value=\"Send\" name=\"submit\">";
echo "</form>";



//dropped in read the file
echo "<td with=50% valign=top>";

$_id = $_GET['id'];
$z=0;

$file = fopen("files/ideas/".$verdammitID.".txt", "r") or die("Unable to open file 2 !");
//$_id
while(! feof($file))
  {
  $_sd[$z] =fgets($file) ;
$_bob[$z]= $_sd[$z] . "<br>";
$z++;
}  
fclose($file);
//endwhile
echo $_bob[2] ."<br>";
echo"Title <b>" .$_bob[0] ."</b><br>";
echo "Idea ". $_bob[3] ."<br>";

echo "<b>".$_bob[1] ."</b><br>";
echo $_bob[4] ."<br>";
//echo $_bob[5];
echo "<br><br>";

echo "</td>";

//annos go here
echo "<td width=25% valign=top>";




//$id=$_GET['id'];
$_id = $_GET['id'];
$z=0;

$file = fopen("files/ideas/".$verdammitID."a.txt", "r") or die("Unable to open file 3 !");
	$_found_you=0;
while(! feof($file))
  {
//$_bold=0;
//echo "<br>";
$_sd[$z] =fgets($file) ;

//$_dunno[$z] = $_sd[$z] ;
echo $_sd[$z]."<br>"; 




//}  
//echo "<b>" .$_COOKIE["username"] ."</b><br>";
 
} //end while
fclose($file);





echo "<br> ";
echo "Add an anno";
echo "<form action=\"add_to_annos.php\" method=\"post\">";
echo"<textarea rows=\"5\" cols=\"20\" name=\"anno\" >";

echo"</textarea><br><br>";
echo" <input type=\"hidden\" name=\"id\" value=";
echo $verdammitID;
echo ">";


echo"<input type=\"submit\" value=\"Send\" name=\"submit\">";
echo "</form>";

echo "</td></tr></table>";

echo "<li><a href=\"home.php\">Back to the front page</a></li>";

echo "</html>";
?>