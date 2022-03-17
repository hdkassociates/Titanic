<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta name="format-detection" content="telephone=no"> -->
<meta name="description" content="Titanic the Musicial 2018">
<title>Titanic<?php if($page != 'home'){echo ' - '.$page;} ?></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/2022.css" type="text/css" media="screen" charset="utf-8" />
<?php if($prettyphoto == 'y'){ ?>
<link rel="stylesheet" href="prettyphoto/css/prettyPhoto-titanic<?php if($page == 'cast'){echo '-bios';} ?>.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<?php }elseif($prettyphoto == 'fancy'){ ?>
<link  href="fancybox/dist/jquery.fancybox.min.css" rel="stylesheet">
<script src="fancybox/dist/jquery.fancybox.min.js"></script>
<?php } ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WKTT29F');</script>
<!-- End Google Tag Manager -->

<?php if($page == 'home'){ ?>
<style>

</style>
<?php } ?>
<!-- Icons -->
<link rel="shortcut icon" href="img/icons/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="img/icons/apple-touch-icon-precomposed.png">
</head>
<body class="<?php echo $page; ?>">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKTT29F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="nav"><div class="inner">
	<div id="toggle"><span>menu</span></div>
	<ul class="mainnav">
		<li<?php if($page == 'home'){echo ' class="current"';} ?>><a href="index.php">Home</a></li>
		<li<?php if($page == 'about'){echo ' class="current"';} ?>><a href="about-the-show.php">About the Show</a></li>
		<li<?php if($page == 'cast'){echo ' class="current"';} ?>><a href="cast-creatives.php">Cast &amp; Creative</a></li>
		<li<?php if($page == 'media'){echo ' class="current"';} ?>><a href="media.php">Sights &amp; Sound</a></li>
		<li<?php if($page == 'reviews'){echo ' class="current"';} ?>><a href="reviews.php">Reviews</a></li>
		<li<?php if($page == 'press'){echo ' class="current"';} ?>><a href="tour.php">Dates</a></li>
	</ul>
	<ul class="booknow">
		<li><a href="tour.php">Book now</a></li>
	</ul>
	<ul class="socialnav">
		<li><a href="https://twitter.com/TitanicOnTour" target="_blank"><img src="img/tw.png" alt="Twitter" /></a></li>
		<li><a href="https://www.facebook.com/Titanic-The-Musical-116973638991396/" target="_blank"><img src="img/fb.png" alt="Facebook" /></a></li>
	</ul>
</div></div>
<div class="pagewrapper">
	<div id="header" class ="desktop"><?php if($page == 'home'){ ?>
		<video  id="animation" style="width:100%;" preload="auto" autoplay muted loop>
			<source src="img/Layer-1.m4v" type="video/mp4">
			<img src="img/1920108.jpg" alt="Titanic The Musical" />
		</video>
	<?php } ?><div class="inner">
	</div></div>
	<div class ="mobile"><?php if($page == 'home'){ ?>
		
	<?php } ?><div class="inner">
	</div></div>
	<?php if($page != 'home'){ ?>
	<div class="heading">
		<h1><img src="img/titanic.png" alt="Titanic, the Musical" /></h1>
		<?php if($page == 'press'){ ?>
		<div class="quotes quotemain">
			<div class="quote large">
				<img src="img/stars-5.png" alt="*****" />
				<p class="quoted"><span class="qlarge">&lsquo;A Triumph.</span> The day after seeing it I went back. It's that good.&rsquo;</p>
				<p class="byline">The Times</p>
			</div>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
	<div id="content"><div class="inner">
