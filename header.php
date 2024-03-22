<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://pinkgallica.com/wp-content/themes/PinkGallica2023/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<link rel="me" href="https://pinkgallica.com" />
		<link rel="me" href="https://github.com/pinkGallica" />
		<?php wp_head(); ?>
		<link rel="icon" type="image/x-icon" href="https://pinkgallica.com/wp-content/uploads/2023/05/favicon.png">
		<link rel="webmention" href="https://webmention.io/pinkgallica.com/webmention" />
		<link rel="pingback" href="https://webmention.io/pinkgallica.com/xmlrpc" />
		</head>
	
	<body>

    <div id="theme">
		<nav>
                <ul class="main-nav">
                    <div class="main-nav2"><li class="nav-logo"><a href="/">Pink Gallica🍒</a></li>
                        <li><button onclick="openMenu()" class="hamburger">
                            <i class="fa fa-bars"></i>
                        </button></li>
                    </div>
                    <div class="appearinmobile nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about-me">Me</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/now">Now</a></li>
                    <li><?php get_search_form(); ?></li>
                    <li><button id="toggle-btn" class="alt-toggle">🍄</button></li>
					</div>
                </ul>
            </nav>
    <div class="main-wrapper">
        <div class="pretty-wrapper">