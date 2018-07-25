<?php
error_reporting(0);

echo "<html>";
echo "<body>";

echo "<table><tr><td><img src='12hake.jpg'></td><td>";
//
echo "<h2>Login</h2>";
echo "<form action =\"check_who_he2.php\" method=\"post\" >";
echo "Username";
echo "&nbsp  <input type=\"text\"  name= \"username\" size =20 >";
echo "<br>";
echo "Password";
echo " &nbsp <input type=\"text\"  name=\"pwd\" size=20 >";
//echo "<br>";
echo " <input type=\"submit\" value=\"Login\" name=\"submit\">";
echo "<br>";
echo "<br><a href=\"join.php\">Join<a><br><br>";

if(isset($_COOKIE["username"])){
echo "Hello <b>". $_COOKIE["username"] ."<b>";
echo "<br><br><a href='new_idea2.php'>Add an idea </a><br>";
//echo "<h3><br><br><i>Current ideas<br><br>";
}

echo "</td><td>";
echo "<h1>Welcome to UKHB aka The 1/2 Hakery</h1>";
echo "<h3>A <b>British</b> Bakery for <b>British people</b></h3>";

echo "</td></tr></table>";

echo "Recent ideas<br>";
//add to home page
//=========================
//add to home page
for ($_x=12 ;$_x<= 62 ; $_x++){
$file = fopen("files/ideas/".$_x.".txt","r");
	for ($_g=0 ;$_g<= 4 ; $_g++){
	$_sd[$_g] =fgets($file) ;
	

	} //end for g

//$_fs =filesize("files/ideas/".$_x.".txt");
//$file_pointer = 'files/ideas/".$_x.".txt';
 //echo $_sd[0] ."<br>";
echo "<a href='reader.php?id=".$_x."'>" . $_sd[0]. "</a><br>";
//echo "<li><a href='reader.php?id=".$_x."'>" . $_sd[0]. "</a></li>";
//end if
fclose($file);
  }//end for
//=========================
  
  





?>