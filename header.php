<!-- header -->
<!DOCTYPE html>
<html>
	<head>
		<title><?php Options::out( 'title' ); ?></title>
		<meta charset="utf-8" />
		<meta name="generator" content="Habari">

		<!--[if IE]>
		<script src="<?php Site::out_url( 'theme' ); ?>/html5.js"></script>
		<![endif]-->

		<?php $theme->header_out(); ?>
	</head>

	<body class="<?php $theme->body_class(); ?>">
		<header>
			<hgroup>
				<h1><a href="<?php Site::out_url( 'habari' ); ?>"><?php Options::out( 'title' ); ?></a></h1>
				<h2><?php Options::out( 'tagline' ); ?></h2>
			</hgroup>
		</header>

		<div id="page">
