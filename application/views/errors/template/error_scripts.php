<?php defined('BASEPATH') OR exit('No direct script access allowed');
   $this->session->set_flashdata('css',[
      'vendor' => [],
      'owner' => [
          'assets/css/views/errors.css'
        ]
   ]);
   $this->session->set_flashdata('js',[
      'vendor' => [],
      'owner' => []
   ]);
?>

<div class='d-flex flex-sm-row flex-column align-items-center' style='min-height:78vh;'>
   <div class='w-50 text-right'>
      <img class='imgErr p-3' src='<?php echo base_url('assets/Images/gosth.png') ?>'>
   </div>
   <div class='w-100'>
        <h1 class="error-code text-dark text-center text-semibold m-none">403 <i class="fa fa-file"></i></h1>
        <p class="text-center">Su navegador no soporta JavaScript!</p>
		<p class="text-center text-danger">Favor de habilitar esta función.</p>
   </div>
</div>