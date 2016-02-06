<?php
include("../res/x5engine.php");
$nameList = array("xkg","vl5","l56","utm","kf8","ejx","chp","dk2","7cu","wka");
$charList = array("4","K","X","N","A","P","4","U","U","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
