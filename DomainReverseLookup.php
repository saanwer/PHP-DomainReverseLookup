<?php
//Coded by | WarLord
//PHP-DomainReverseLookup
//https://github.com/saanwer
//Remove "error_reporting(0);" when you're modifying the code
error_reporting(0);
ob_start();
@set_time_limit(0);
echo "<!DOCTYPE HTML><html><link rel='icon' href='http://icons.iconarchive.com/icons/itzikgur/my-seven/256/Backup-IBM-Server-icon.png' type='image/x-icon' /><body background='http://img08.deviantart.net/a2ea/i/2008/219/c/d/hex___green_by_turnip_stew.jpg'><center><h1><font color='#5dff00'><font face='verdana'>DOMAIN REVERSE LOOKUP</font></font>
</h1></center>";
echo "<hr color='#5dff00' size='5'>";
echo "<title>Domain Reverse Lookup</title>";
echo "<b>";
echo "<code><font color='#5dff00'>";
echo "</b></p></center>";
echo "<center><font color='#5dff00'>Domain reverse lookup | WarLord</font></center><div id=result>";
 
 
echo "<center><br /><br /><form><input size='60' type='text' placeholder='Enter a website here to reverse check. Ex: github.com' name='links' /><input type='submit' value='✓'></form></center><br />";
echo "<style class='placeholder'>
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #5dff00;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #5dff00;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #5dff00;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #5dff00;
}
</style>";
echo "<style class='buttondomain'>";
echo "input[type='submit'] {
    -webkit-border-radius: 19;
  -moz-border-radius: 19;
  border-radius: 19px;
  font-family: Arial;
  color: #5eff00;
  font-size: 10px;
  background: transparent;
  padding: 2px 19px 2px 19px;
  border: solid #39ff08 2px;
  text-decoration: none;
}
input[type='submit']:hover {
  background: #7a7a7a;
  text-decoration: none;
}
input[type='text'] {
    -webkit-border-radius: 19;
  -moz-border-radius: 19;
  border-radius: 19px;
  font-family: Arial;
  color: #5eff00;
  font-size: 12px;
  background: transparent;
  padding: 2px 19px 2px 19px;
  border: solid #39ff08 2px;
  text-decoration: none;
}
input[type='text']:hover {
  background: transparent;
  text-decoration: none;
}
</style>";

if(isset($_GET["links"]))
{
$site = $_GET["links"];
$links = "http://domains.yougetsignal.com/domains.php";
 
//Curl Function
$ch = curl_init($links);
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
        echo "<tr><td><a class='buttondomain' href='$lnk' target=_blank>$lnk</a></td></tr>";
        echo "<style class='buttondomain'>";
        echo ".buttondomain {
    -webkit-border-radius: 19;
  -moz-border-radius: 19;
  border-radius: 19px;
  font-family: Arial;
  color: #5eff00;
  font-size: 15px;
  background: transparent;
  padding: 2px 19px 2px 19px;
  border: solid #39ff08 2px;
  text-decoration: none;
}
.buttondomain:hover {
  background: transparent;
  text-decoration: none;
}
</style>";
}
echo "</table>";
echo "</center>";
curl_close($ch);
}
echo "<audio autoplay> <source src='http://www.soundescapestudios.com/SESAudio/SES%20Site%20Sounds/Beeps/Beeps-short-01.wav' type='audio/mpeg'></audio>";
echo "<br /><br /><footer id='det' style='position:fixed; left:0px; right:0px; bottom:0px; background:rgb(0,0,0); text-align:center; border-top: 1px solid #5dff00; border-bottom: 1px solid #5dff00;>
<b><center><code><font style='opacity 0.80'><font color='#5dff00'>Coded By | WarLord&nbsp;<a href='https://www.github.com/saanwer' id='github' target='_blank'><img src='http://i.imgur.com/xSaKg89.png' height='20' width='20'></font></font></code></center></b>
</footer></body></html>";
?>
