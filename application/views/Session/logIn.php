<?php defined('BASEPATH') OR exit('No direct script access allowed');
   
   $this->session->set_flashdata('css',[
      'vendor' => [],
      'owner' => [
         'assets/Css/general/formTemplate.css',
         'assets/Css/views/login.css'
      ]
   ]);
   $this->session->set_flashdata('js',[
      'vendor' => [
         'assets/vendor/jqueryValidation/v1.19.1/jquery.validate.min.js',
         'assets/vendor/jqueryValidation/v1.19.1/additional-methods.min.js',         
         'assets/vendor/jqueryValidation/v1.19.1/messages_es.js'
      ],
      'owner' => [
         'assets/Scripts/'. ENV .'/libs/jquery.validate.defaults.js',
         'assets/Scripts/'. ENV .'/libs/exception.js',
         'assets/Scripts/'. ENV .'/libs/genericAjaxPromise.js',
         'assets/Scripts/'. ENV .'/libs/checkAjaxResponse.js',
         'assets/Scripts/'. ENV .'/libs/generalUtils.js',
         'assets/Scripts/'. ENV .'/views/Session/logIn.js'
      ]
   ]);

   $__togo = $toGo;
?>

<div class='d-flex flex-sm-row flex-column mh-100WithFooter'>
   <div class="sidenav d-flex align-items-center">
      <div class="p-2">
         <h1>QUERY<br> <small>inicio de sesión</small></h1>
         <p>Favor de ingresar el usuario y contraseña que le fueron proporcionados.</p>
      </div>      
   </div>
   <div class='d-flex align-items-center pt-2 px-2 mx-auto'>
      <div>
         <h2 class='pb-1'><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i> <small> autenticar acceso</small></h2>
         <form id='form' class='pb-3' autocomplete="off" novalidate>
            <div class="form-group">
               <label class='sr-only'>Usuario</label>
               <input type="text" class="form-control" id='username' name='username' placeholder="Nombre de usuario" autofocus required>
            </div>
            <div class="form-group">
               <label class='sr-only'>Contraseña</label>
               <input type="password" class="form-control" id='password' name='password' placeholder="Contraseña" required>
            </div>
            <div class="form-group">
               <div class="custom-control custom-checkbox my-1 mr-sm-2">
                  <input type="checkbox" class="custom-control-input" id="remember" name='remember'>
                  <label class="custom-control-label" for="remember">Recordar datos de sesión</label>
               </div>
            </div>
            <button id='submit' type="submit" class="btn btn-outline-dark"><i class="fa fa-unlock-alt pr-2" aria-hidden="true"></i> Ingresar</button>
            
            <input type="hidden" id="toGo" value="<?php echo $__togo ?>" data-value="<?php echo $__togo ?>" />
         </form>
      </div>
   </div>
   </div>
</div>

<script>
   const $__msg = '<?php echo (isset($msg) ? base64_decode($msg) : null) ?>';
</script>