<?php require_once("res/x5engine.php"); ?><!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="nl-NL" dir="ltr">
	<head>
		<title>Zoeken - Kevinsplace</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Hendrik stal" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 12.0.5.22 - www.websitex5.com" />
		<meta property="og:locale" content="nl-NL" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://kevinsplace.serverisland.nl/imsearch.php" />
		<meta property="og:title" content="Zoeken" />
		<meta property="og:site_name" content="Kevinsplace" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="style/reset.css?12-0-5-22" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?12-0-5-22" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?12-0-5-22" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?12-0-5-22" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?12-0-5-22" media="screen" />
		<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="style/menu_ie.css?12-0-5-22" media="screen" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css?12-0-5-22" media="screen" /><![endif]-->
		<link rel="alternate" type="application/rss+xml" title="Kevinsplace" href="x5feedready.php" />
		
		<script type="text/javascript" src="res/jquery.js?12-0-5-22"></script>
		<script type="text/javascript" src="res/x5engine.js?12-0-5-22" data-files-version="12-0-5-22"></script>
		
		
		
		<script type="text/javascript">
			x5engine.boot.push(function () { x5engine.utils.imCodeProtection('Hendrik stal'); });
			x5engine.boot.push(function () { x5engine.utils.checkBrowserCompatibility(); });
			x5engine.boot.push(function () { x5engine.bgStretch('style/bg.jpg', true, 0); });
		</script>
		<meta name="apple-itunes-app" content="app-id=665879631, app-argument=http://kevinsplace.serverisland.nl/x5feedready.xml">
		<meta name="google-site-verification" content="pZecAb0ngviQm_GytjCB4S7dXtyji0_g5Rqx2dmlAs0" />
		<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-73391772-1','auto');ga('send', 'pageview');</script>
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Zoeken - Kevinsplace</h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Sla het hoofdmenu over">Ga naar de inhoud</a>
			<a id="imGoToMenu"></a><p class="imHidden">Hoofdmenu:</p>
			<div id="imMnMnGraphics"></div>
			<div id="imMnMn" class="auto">
				<div class="hamburger-site-background menu-mobile-hidden"></div><div class="hamburger-button"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.php">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Homepage</span></span>
							</span>
						</a>
					</li></ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Zoekresultaten</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>

				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
				<div class="imTemplateContent" style="position: absolute; top: 30px; left: 15px; width: 494px; height: 19px;"><img src="images/header_text.png" alt="Deze website is Hosted and powered by Power2host Hosting" style="width: 494px; height: 19px;" /></div>
				<div id="imFooterResponsiveContent">Copyright 2015. All rights reserved.</div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Herlees deze pagina">Terug naar de inhoud</a> | <a href="#imGoToMenu" title="Herlees deze site">Terug naar het hoofdmenu</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Schakel JavaScript in om deze website te kunnen gebruiken.</div></noscript>
	</body>
</html>
