<!-- header -->
<!DOCTYPE html>
<html>
	<head>
		<title><?php Options::out( 'title' ); ?></title>
		<meta charset="utf-8" />
		<meta name="generator" content="Habari">

		<link rel="edit" type="application/atom+xml" title="<?php Options::out( 'title' ); ?>" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">

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
