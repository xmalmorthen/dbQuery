<?php defined('BASEPATH') OR exit('No direct script access allowed');
    $__title = 'QUERY' . ( $this->session->flashdata('title') ? ' - ' . $this->session->flashdata('title') : '' );
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
	<!-- Basic -->
	<meta charset="iso-8859-1">
    <title><?php echo $__title;?></title>

	<meta name="keywords" content="<?php echo $__title;?>">
	<meta name="description" content="<?php echo $__title;?>">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="Xmal Morthen">
    <meta property="og:url" content="">
    <!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="true" />

    <meta name="og:description" content="<?php echo $__title;?>">
    <meta property="og:image" content="<?php echo base_url('assets/Images/Icons/favIcon.png') ?>">
    <meta name="image" content="<?php echo base_url('assets/Images/Icons/favIcon.png') ?>">

	<link rel="image_src" href="<?php echo base_url('assets/Images/Icons/favIcon.png') ?>">
    <link rel="icon" href="<?php echo base_url('assets/Images/Icons/favIcon.png') ?>" sizes="16x16 32x32" type="image/png">

    <!-- VENDOR CSS -->
    <link href=" https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href=" https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" 	 rel="stylesheet" />
    <link href="<?php echo base_url('assets/vendor/bootstrap/v4.3.1/bootstrap.min.css') ?>" 	 rel="stylesheet" />    
    <!-- /VENDOR CSS -->
    
    <!-- OWN CSS -->
    <link href="<?php echo base_url('assets/Css/views/masterTemplate.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/views/errors.css') ?>" rel="stylesheet" />	
    <!-- /OWN CSS -->
</head>
<body class="Site">
    <img class="imgBackground" src="<?php echo base_url('assets/Images/imgBackground.png') ?>" />

	<header class="bg-dark px-3">
		<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo site_url() ?>"><h2 class='text-white'>QUERY</h2></a>
		</nav>
	</header>

    <div id="principalContent" class="Site-content principalContent">
		<div class='d-flex flex-sm-row flex-column align-items-center' style='min-height:78vh;'>
    		<div class='w-50 text-right'>
				<img class='imgErr p-3' src='<?php echo base_url('assets/Images/gosth.png') ?>'>
			</div>
   			<div class='w-100'>
        		<h1 class="error-code text-dark text-center text-semibold m-none">403 <i class="fa fa-file"></i></h1>
        		<p class="text-center">Su navegador no comple con los requerimientos mínimos requeridos!</p>
				<p class="text-center text-danger">Se recomienta actualizarlo para poder usar la plataforma.</p>
   			</div>
		</div>
    </div>

	<footer class="bg-dark p-3 text-right text-white">
		<small>© Copyright 2019-2020 - Todos los derechos reservados<small>
	</footer>
</body>
</html>