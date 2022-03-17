<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>Titanic<?php echo ' - '.$name; ?></title>
<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" charset="utf-8" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WKTT29F');</script>
<!-- End Google Tag Manager -->

</head>
<body class="bio">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKTT29F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="content"<?php if($photo){echo ' class="withphoto"';} ?>>
	<?php if($photo){
		echo '<div class="bioimg">';
		echo '<img src="/bios/images/'.$photo.'" alt="'.$name.'" />';
		echo '</div>';
	} ?>
	<h1><?php echo $name; ?></h1>
	<?php if($role){echo '<h2>'.$role.'</h2>';} ?>
