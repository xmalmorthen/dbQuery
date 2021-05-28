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
        <h1 class="error-code text-dark text-center text-semibold m-none">404 <i class="fa fa-file"></i></h1>
        <p class="text-center">Lo sentimos, pero la página que buscas no existe.</p>
        <br/>
        <br/>
        <section class='p-5'>
            <h4 class="text">Aquí hay algunos enlaces útiles</h4>
            <ul class="nav nav-list primary">
                <li>
                    <a href="<?php echo site_url(); ?>"><i class="fa fa-caret-right text-dark"></i> Página principal</a>
                </li>                    
            </ul>
        </section>
   </div>
</div>