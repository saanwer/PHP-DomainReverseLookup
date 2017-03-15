<?php
//Coded by | WarLord
//https://github.com/saanwer
//Remove "error_reporting(0);" when you're modifying the code
error_reporting(0);
ob_start();
@set_time_limit(0);
echo "<title>Domain reverse checker | WarLord</title>";
echo "<link href='https://img.clipartfox.com/89ecf5ff2ec3d2bfcd8ea6b7486f2ded_white-and-black-globe-clip-art-globe-clipart-black-and-white-png_297-298.png' rel='shortcut icon' type='image/x-icon' />";
echo "<p align='center'>
<img border='0' src='http://i1215.photobucket.com/albums/cc519/iwanlistiadi1/globe-gif.gif' height='300' width='300'></p>";
echo "<center><font color='black' size='4' face='impact'>Domain reverse lookup | WarLord</center></font><div id=result>";
 
 
echo "<center><br /><br /><form><input size='60' value='Enter a website here to reverse check. Ex: github.com' name='ghost' /><input type='submit' value='✓'></form></center>";

if(isset($_GET["ghost"]))
{
$site = $_GET["ghost"];
$ghost = "http://domains.yougetsignal.com/domains.php";
 
//Curl Function
$ch = curl_init($ghost);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$site&ket=");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
$resp = curl_exec($ch);
$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
$array = explode(",,", $resp);
unset($array[0]);
echo "<center>";
echo "<table class=tbl>";
foreach($array as $lnk)
{
        print "<tr><td><a href='$lnk' target=_blank>$lnk</a></td></tr>";
}
echo "</table>";
echo "</center>";
curl_close($ch);
}
?>
