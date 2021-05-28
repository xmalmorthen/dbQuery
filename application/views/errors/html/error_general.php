<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	$cnfg = (object)json_decode(CNFG);
	$version = $cnfg->general->version;

	$__title = 'QUERY - Error';
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
    <link href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/sweetAlert2/v9.7.1/minimal.css') ?>" rel="stylesheet">    
    <!-- /VENDOR CSS -->
    
    <!-- OWN CSS -->
    <link href="<?php echo base_url('assets/Css/views/masterTemplate.css') ?>?v=<?php echo $version ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/views/errors.css') ?>?v=<?php echo $version ?>" rel="stylesheet" />
    <!-- /OWN CSS -->

    <script src="<?php echo base_url('assets/Scripts/' . ENV . '/libs/compatibilidad.js') ?>?v=<?php echo $version ?>"></script>
</head>
<body class="Site">

	<noscript><meta http-equiv="refresh" content="0;url=<?php echo site_url('Error/noScript') ?>"></noscript>

    <img class="imgBackground" src="<?php echo base_url('assets/Images/imgBackground.png') ?>" />

    <div class="" aria-live="polite" aria-atomic="true" style="">
        <div id="toastSection" style="position: fixed; top: 5px; right: 5px;z-index: 99999999;"></div>
    </div>
    
	<header></header>

    <div id="principalContent" class="Site-content principalContent">
        <!-- BODY -->
        <div class='d-flex flex-sm-row flex-column align-items-center' style='min-height:78vh;'>
			<div class='w-50 text-right'>
				<img class='imgErr p-3' src='<?php echo base_url('assets/Images/gosth.png') ?>'>
			</div>
			<div class='w-100 text-center'>
					<h2 class="error-code text-dark text-semibold m-none"><i class="fa fa-exclamation-triangle"></i> <?php echo $heading; ?></h2>
					<div class='text-danger' style='font-size: 1.3rem;'>
						<?php echo $message; ?>
					</div>
			</div>
		</div>
        <!-- BODY -->
    </div>

    <footer class="bg-dark p-3 text-right text-white">
        <small>versión</small> <span class='font-weight-bold'><?php echo $GLOBALS["cnfg"]->general->version ?></span>
        <br/><small>Algoritmo Tech © Copyright 2019-<?php echo date('Y') ?> [ Todos los derechos reservados ]<small>
    </footer>

    <script defer src="<?php echo base_url('assets/vendor/jquery/v3.4.1/jquery-3.4.1.min.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/popper/v1/popper.min.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/bootstrap/v4.3.1/bootstrap.min.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/bootstrap/v4.3.1/bootstrap.bundle.min.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/moment/withLocale/v2.14.1/moment-with-locales_2.14.1.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/loadingOverlay/v2.1.6/loadingoverlay.min.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/sweetAlert2/v9.7.1/sweetalert.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/jQueryCookie/v2.2.0/js.cookie.js') ?>"></script>

    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/guid.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/alerts.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/toast.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/slumber.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/mainCharge.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/views/Layout/main.js') ?>?v=<?php echo $version ?>"></script>

</body>
</html>
