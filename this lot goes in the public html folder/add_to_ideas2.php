<?php
ob_start();
//========================================
$_old_num = file_get_contents('number.txt');
//echo $_old_num ." is old num ";
fclose();

$_old_num++;
$_new_num =$_old_num;
//echo "new number is " . $_new_num;

$myfile = fopen("number.txt","w") or die("Unable to open file!");
fwrite($myfile, $_new_num);
fclose($myfile);
//========================================


//----end of getting next number

//start of putting stuff into files
//and here some magic occurs and hash dons a false beard and becomes new_number
$_next_number=$_new_num;
echo "next num is  ". $_new_num;
//exit;
//$_new_number=$_hashstring;
//$_name=$_name_from_cookies;
$_name=$_POST["name"];
$_category=$_POST["cat"];
$_title=$_POST["idea_title"];
$_idea=$_POST["idea"];
$dt_added= date("Y-m-d ");
//$date=
$myfile = fopen("files/ideas/".$_next_number."a.txt", "w") or die("Unable to open file!");
fclose($myfile);
$myfile = fopen("files/ideas/".$_next_number."l.txt", "w") or die("Unable to open file!");
fclose($myfile);

$myfile = fopen("files/ideas/".$_next_number.".txt", "w") or die("Unable to open file!");
//$myfile = fopen($_new_number.".txt", "w") or die("Unable to open file!");
fwrite($myfile, $_title . "\n ");
fwrite($myfile, $_name ."\n");
fwrite($myfile, $_category ."\n");
//fwrite($myfile, $idea_title ."\n");
//fwrite($myfile, $_title ."\n");
fwrite($myfile, $_idea ."\n");
fwrite($myfile, $dt_added ."\n");
fclose($myfile);



header("Location: home.php");


//end of putting stuff in files

?>