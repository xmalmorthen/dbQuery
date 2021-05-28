<?php defined('BASEPATH') OR exit('No direct script access allowed');

   $this->session->set_flashdata('css',[
	  'vendor' => [
		  'assets/vendor/datatable/dataTables.bootstrap4.min.css',
		  'assets/vendor/datatable/responsive.bootstrap4.min.css',
		  'assets/Css/vendor/datatable.own.styles.css',
		  'assets/vendor/select2/4.0.8/select2.min.css',
		  //'assets/css/vendor/owner-select2-bootstrap.min.css',
		  'assets/vendor/select2/4.0.8/select2.corrige.css'
	  ],
	  'owner' => [
		  'assets/Css/general/formTemplate.css',
	  ]
   ]);
   $this->session->set_flashdata('js',[
	  'vendor' => [
		'assets/vendor/datatable/v1.10.20/jquery.dataTables.min.js',
		'assets/vendor/datatable/dataTables.bootstrap4.min.js',
		'assets/vendor/datatable/dataTables.responsive.min.js',
		'assets/vendor/datatable/dataTables.fixedHeader.min.js',
		'assets/vendor/datatable/responsive.bootstrap4.min.js',
		'assets/vendor/jqueryValidation/v1.19.1/jquery.validate.min.js',
		'assets/vendor/jqueryValidation/v1.19.1/additional-methods.min.js',
		'assets/vendor/jqueryValidation/v1.19.1/messages_es.js',
		'assets/vendor/select2/4.0.8/select2.full.min.js',
		'assets/vendor/select2/4.0.8/es.js',
	  ],
	  'owner' => [
		'assets/Scripts/'. ENV .'/libs/jquery.validate.defaults.js',
		'assets/Scripts/'. ENV .'/libs/datatable.defaults.js',
		'assets/Scripts/'. ENV .'/libs/exception.js',
		'assets/Scripts/'. ENV .'/libs/genericAjaxPromise.js',
		'assets/Scripts/'. ENV .'/libs/checkAjaxResponse.js',
		'assets/Scripts/'. ENV .'/libs/generalUtils.js',
		'assets/Scripts/'. ENV .'/libs/checkRole.js',
		'assets/Scripts/'. ENV .'/views/Administrator/users.js',
		'assets/Scripts/'. ENV .'/views/Administrator/sistemTab.js',

	  ]
   ]);
?>

<div class='tabs p-3'>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="users-tab" data-toggle="tab" href="#usersTab" role="tab" aria-controls="users" aria-selected="true">
				<i class="fa fa-user-circle-o" aria-hidden="true"></i> Usuarios
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="roles-tab" data-toggle="tab" href="#sistemTab" role="tab" aria-controls="roles" aria-selected="false">
				<i class="fa fa-handshake-o" aria-hidden="true"></i> Sistema
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo( site_url('log') ) ?>">Log</a>
		</li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="usersTab" role="tabpanel" aria-labelledby="users-tab">
			<?php echo $this->load->view('/administrator/users',NULL,TRUE) ?>
		</div>
		<div class="tab-pane fade" id="sistemTab" role="tabpanel" aria-labelledby="roles-tab">
			<?php echo $this->load->view('/administrator/sistemTab',null,TRUE) ?>
		</div>
	</div>
</div>