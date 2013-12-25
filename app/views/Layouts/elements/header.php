<!doctype html>
<html>
	<head>
		<title>Yellow Pages Listing Script by ClassifiedsGeek.com</title>
        
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<?php
		foreach ($controller->css as $css)
		{
			echo '<link type="text/css" rel="stylesheet" href="'.(isset($css['remote']) && $css['remote'] ? NULL : BASE_PATH).$css['path'].$css['file'].'" />';
		}
		
		foreach ($controller->js as $js)
		{
			echo '<script type="text/javascript" src="'.(isset($js['remote']) && $js['remote'] ? NULL : BASE_PATH).$js['path'].$js['file'].'"></script>';
		}
		?>
	</head>
	<body>
	
		<div id="container">
		
			<div id="header_wrap">
				
				<div id="header">
				
					<a id="header_logo" href="http://www.classifiedsgeek.com/" target="_blank"><img src="<?php echo IMG_PATH; ?>header-logo.png" alt="Property Listing Script by ClassifiedsGeek.com" /></a>
					<div id="header_title"></div>
				
				</div> <!-- header -->
				
			</div> <!-- header_wrap -->
