<?php defined('BASEPATH') OR exit('No direct script access allowed');
    $__title = 'QUERY' . ( $this->session->flashdata('title') ? ' - ' . $this->session->flashdata('title') : '' );

    $__header = $this->session->flashdata('header') !== null ? $this->session->flashdata('header') : true;
    $__footer = $this->session->flashdata('footer') !== null ? $this->session->flashdata('footer') : true;

    $__userDataSession = isset($_SESSION[SESSIONVAR]) ? $_SESSION[SESSIONVAR] : null;
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
    <!-- /OWN CSS -->

    <?php if ($css) { if (array_key_exists('vendor', $css))  foreach ($css['vendor'] as $key => $value) { ?>
        <link href="<?php echo base_url($value) ?>" rel="stylesheet" />
    <?php } if (array_key_exists('vendorWithRef', $css))  foreach ($css['vendorWithRef'] as $key => $value) { ?>
        <link href="<?php echo $value ?>" rel="stylesheet" />
    <?php } if (array_key_exists('owner', $css))  foreach ($css['owner'] as $key => $value) { ?>
        <link href="<?php echo base_url($value) ?>?v=<?php echo $version ?>" rel="stylesheet" />
    <?php }} ?>

    <script type="text/javascript">
		const 	baseUrl = "<?php echo base_url() ?>",
		 		siteUrl = "<?php echo site_url() ?>",
				csrf = {
					token_name : "<?php echo $this->security->get_csrf_token_name(); ?>",
					hash : "<?php echo $this->security->get_csrf_hash(); ?>"
				},
				uri = {
					uri_string : JSON.parse('<?php echo json_encode($this->uri->uri_string);  ?>'),
					segments : JSON.parse('<?php echo json_encode($this->uri->segments);  ?>'),
					rsegments : JSON.parse('<?php echo json_encode($this->uri->rsegments);  ?>')
                },
                user = JSON.parse('<?php echo json_encode($__userDataSession);  ?>');
    </script>

    <script src="<?php echo base_url('assets/Scripts/' . ENV . '/libs/compatibilidad.js') ?>?v=<?php echo $version ?>"></script>
</head>
<body class="Site">

	<noscript><meta http-equiv="refresh" content="0;url=<?php echo site_url('Error/noScript') ?>"></noscript>

    <img class="imgBackground" src="<?php echo base_url('assets/Images/imgBackground.png') ?>" />

    <div class="" aria-live="polite" aria-atomic="true" style="">
        <div id="toastSection" style="position: fixed; top: 5px; right: 5px;z-index: 99999999;"></div>
    </div>

    <?php if ($__header) { ?>
        <header class="bg-dark px-3">
            <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="<?php echo site_url() ?>"><h2 class='text-white'>QUERY</h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php echo $this->load->view('Layouts/headers/menu',null,true) ?>
                </div>
            </nav>
        </header>
    <?php } else { ?> 
        <header></header>
    <?php }?>

    <div id="principalContent" class="Site-content principalContent">
        <!-- BODY -->
        <?php echo isset($body) ? $body : '' ?>
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
    
    <script defer src="<?php echo base_url('assets/vendor/RxJS/v2.1.11/rx.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/RxJS/v2.1.11/rx.binding.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/RxJS/v2.1.11/rx.time.js') ?>"></script>
    <script defer src="<?php echo base_url('assets/vendor/RxJS/v2.1.11/rx.jquery.min.js') ?>"></script>

    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/guid.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/alerts.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/toast.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/slumber.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/libs/mainCharge.js') ?>?v=<?php echo $version ?>"></script>
    <script defer src="<?php echo base_url('assets/Scripts/'. ENV . '/views/Layout/main.js') ?>?v=<?php echo $version ?>"></script>

    <?php if ($js) { if (array_key_exists('vendor', $js))  foreach ($js['vendor'] as $key => $value) { ?>
        <script defer src="<?php echo base_url($value) ?>"></script>
    <?php } if (array_key_exists('vendorWithRef', $js))  foreach ($js['vendorWithRef'] as $key => $value) { ?>
        <script defer src="<?php echo $value ?>"></script>
    <?php } if (array_key_exists('owner', $js))  foreach ($js['owner'] as $key => $value) { ?>
        <script defer src="<?php echo base_url($value) ?>?v=<?php echo $version ?>"></script>
    <?php }} ?>

</body>
</html>