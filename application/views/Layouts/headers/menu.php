<?php defined('BASEPATH') OR exit('No direct script access allowed');
   $__userDataSession = $_SESSION[SESSIONVAR];
   $__userName = $__userDataSession->person->nombres . ' ' . $__userDataSession->person->ap1 . ' ' . $__userDataSession->person->ap2;
?>

<div class='ml-5'>
    <h4 class='text-white'>Bienvenido <small><?php echo $__userName ?></small></h4>
</div>
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url() ?>">
            <i class="fa fa-home"></i> Tablero
        </a>
    </li>

    <?php if ( 
        array_key_exists('super',$__userDataSession->rol)
        || array_key_exists('admin',$__userDataSession->rol)
    ) {?>

    <li class="nav-item ">
        <a class="nav-link" href="<?php echo site_url('/administrator') ?>">
            <i class="fa fa-cogs"></i> Administración
        </a>
    </li>

    <?php } ?>

    <li class="nav-item ">
        <a class="nav-link logOut" href="#">
            <i class="fa fa-user"></i> Cerrar sesión
        </a>
    </li>
</ul>

