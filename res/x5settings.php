<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://kevinsplace.serverisland.nl/',
	'homepage_url' => 'http://kevinsplace.serverisland.nl/index.php',
	'public_folder' => '/home/kevin/public_html/kevinsplace/database',
	'salt' => '58n2z0rh21bh98lkmdfm4esj94d6g38r17znca9g3f8y79w8l96t0',
	'use_common_email_sender_address' => true,
	'common_email_sender_addres' => 'no_reply@serverisland.nl'
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'2d31ux1m' => array(
		'description' => 'registratrieDB',
		'host' => 'serverisland.nl',
		'database' => 'kevin_place',
		'user' => 'kevinsplace',
		'password' => 'kevin98'
	)
);

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array(
	'x5gb41' => array(
		'id' => 'x5gb41',
		'pagetitle' => 'Gastenboek',
		'celltitle' => '',
		'rating' => TRUE,
		'order' => 'desc', 
		'sendmode' => 'file',
		'folder' => '/home/kevin/public_html/kevinsplace/database//home/kevin/database',
	)
);
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v12 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#708090" style="background-color: #708090;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt Tahoma; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 0; border-bottom: none; border-left-width: 1px;background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailFooter" style="font: normal normal normal 7pt Tahoma; color: #000000; background-color: transparent; text-align: center; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 0; border-top: none; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; padding: 10px; background-color: #FFFFFF" width="700px">' . "\n\t\t" . 'Deze e-mail bevat informatie die enkel voor de hierboven genoemde geadresseerde bedoeld is. <br>Als u deze e-mail onbedoeld hebt ontvangen, licht de afzender hier dan a.u.b. onmiddellijk over in en verwijder de e-mail vervolgens zonder hem te kopiëren.' . "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#708090';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt Tahoma; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Controlewoord:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php