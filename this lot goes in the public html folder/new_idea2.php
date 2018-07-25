<?php 
ob_start();

//echo "<html><body>";
if(isset($_COOKIE["username"])){
 //   echo "Hi " . $_COOKIE["username"];
$_user_name=$_COOKIE["username"];
} else{
echo "You are not logged in, or your cookie has expired";
echo "Click <a href =\"home.php\">here </a> to get logged in.";
}




//add_to_ideas.php
echo "<html><body>";
echo "<table><tr><td><img src=\"12hake.jpg\"></td> ";
echo "<td><h2>Welcome to UKHB aka The 1/2 Hakery</h2></td></tr></table>";

echo "<form action=\"add_to_ideas2.php\" method=\"post\">";



echo "<br>";
echo "Details<br><br>";




echo"<input type=\"hidden\"  name=\"name\" size=\"20\" value=\"". $_user_name. "\"><br>";
echo "This site is still in falling over mode, so please keep a copy of what you wrote<br>";
echo "<b>Please note, do the idea as one (repeat 1) paragraph only,  100 line paragraph is fine";
echo " <br>Please also note, the idea editor is under construction, so please check your post <u>carefully</u> before hitting the button</b>";
echo "<br>Category of your choice <br>";
echo " <br> <input type=\"radio\" name=\"cat\" value=\"Everything else\" checked>Everything else 
<br>or (sighs) if you really must...<br>";

echo "<input type=\"radio\" name=\"cat\" value=\"Physics - energy - fusion - fusion research - fusion 
research scientists - fusion research scientists' pets - fusion research 
scientists' pet fish - halibut\" type=\"radio\">Physics - energy - fusion - 
fusion research - fusion research scientists - fusion research scientists' 
pets - fusion research scientists pet fish - halibut";



//<br>";
echo  "<br><br>Idea title<br>";
echo"<input type=\"text\"  name=\"idea_title\" size=\"40\">";

//echo"<input type=\"text\"  name=\"idea\" size=\"40\" value=\"Idea title\">";

//cat
//idea_title

//hash
//Your name
//Category of your choice
//Idea title
//idea
echo"<br>";
echo"The details <br>";
echo"<textarea rows=\"25\" cols=\"50\" name=\"idea\" >";
echo"</textarea><br><br>";
echo"<input type=\"submit\" value=\"Post\" name=\"submit\">";
echo"</form>";
echo "<br><br>";
echo "</body>";
echo  "</html>";







?>




