<?php defined('BASEPATH') OR exit('No direct script access allowed');
   $this->session->set_flashdata('css',[
	  'vendor' => [
		 'assets/vendor/datatable/dataTables.bootstrap4.min.css',
		 'assets/vendor/datatable/responsive.bootstrap4.min.css',
		 'assets/Css/vendor/datatable.own.styles.css',
		 'assets/vendor/select2/4.0.8/select2.min.css',
		 //'assets/css/vendor/owner-select2-bootstrap.min.css',
		 'assets/vendor/select2/4.0.8/select2.corrige.css',
		 'assets/vendor/jquery-ui/v1.12.1/jquery-ui.css'
	  ],
	  'owner' => [
		 'assets/Css/general/formTemplate.css',
		 'assets/Css/views/dashboard.css',
		 'assets/Css/general/slideRangeOwnStyles.css'
	  ]
   ]);
   $this->session->set_flashdata('js',[
	  'vendor' => [
		'assets/vendor/datatable/v1.10.20/jquery.dataTables.min.js',
		'assets/vendor/datatable/dataTables.bootstrap4.min.js',
		'assets/vendor/datatable/dataTables.responsive.min.js',
		'assets/vendor/datatable/dataTables.fixedHeader.min.js',
		'assets/vendor/datatable/responsive.bootstrap4.min.js',

		'assets/vendor/datatable/dataTables.buttons.min.js',
		'assets/vendor/datatable/buttons.flash.min.js',
		'assets/vendor/datatable/jszip.min.js',
		'assets/vendor/datatable/pdfmake.min.js',
		'assets/vendor/datatable/vfs_fonts.js',
		'assets/vendor/datatable/buttons.html5.min.js',
		'assets/vendor/datatable/buttons.print.min.js',

		'assets/vendor/jqueryValidation/v1.19.1/jquery.validate.min.js',
		'assets/vendor/jqueryValidation/v1.19.1/additional-methods.min.js',
		'assets/vendor/jqueryValidation/v1.19.1/messages_es.js',
		'assets/vendor/select2/4.0.8/select2.full.min.js',
		'assets/vendor/select2/4.0.8/es.js',
		'assets/vendor/html2pdf/html2pdf.bundle.js',
		'assets/vendor/jsPDF/v1.3.2/dist/jspdf.min.js',
		'assets/vendor/jquery-ui/v1.12.1/jquery-ui.min.js'
	  ],
	  'owner' => [
		'assets/Scripts/'. ENV .'/libs/jquery.validate.defaults.js',
		'assets/Scripts/'. ENV .'/libs/groupBy.js',
		'assets/Scripts/'. ENV .'/libs/datatable.defaults.js',
		'assets/Scripts/'. ENV .'/libs/exception.js',
		'assets/Scripts/'. ENV .'/libs/genericAjaxPromise.js',
		'assets/Scripts/'. ENV .'/libs/checkAjaxResponse.js',
		'assets/Scripts/'. ENV .'/libs/generalUtils.js',
		'assets/Scripts/'. ENV .'/views/Dashboard/main.js'
	  ]
   ]);
?>

<div class='tabs p-3'>
	<div clas='row'>
		<!-- criterios de busqueda -->
		<div class='col-12'>
			<h2 class='border-bottom'><i class="fa fa-cog" aria-hidden="true"></i> Configuración de búsqueda</h2>
			<div class='notifyArea'>&nbsp;</div>
			<div class="collapse pb-2" id="searchView">
				<div class="card card-body">
					<div class='row border-bottom'>
						<div class='col align-self-start'>
							<h3><i class="fa fa-search" aria-hidden="true"></i> Criterios de búsqueda</h3>
						</div>
						<div class='col-3 align-self-end text-right pb-1'>
							<a role="button" class="btn btn-outline-secondary" title='Ocultar' data-toggle="collapse"
								href="#searchView" aria-expanded="false" aria-controls="searchView">
								<i class="fa fa-times" aria-hidden="true"></i>
							</a>
						</div>
					</div>

					<form action="#" id="searchViewForm" name="searchViewForm" autocomplete="off" novalidate>
						<div class="form-row">
							<div class="col-12 col-md-6 col-lg-4 my-2">
								<div class='d-flex align-items-center info'>
									<span class="round-tab"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
									<h5 class='border-bottom d-inline-block pl-2 w-50'>paso 1 <text class='d-none d-xl-inline-block'>[<small class='px-1'>seleccionar entidad</small>]</text></h5>
								</div>

								<label for="entidad" class='requiredMark mb-0'>ENTIDAD</label>
								<select class="form-control select2Cmb required" id="entidad" name="entidad[]" data-error="#err_entidad" multiple="multiple" required autofocus></select>
								<span id="err_entidad"></span>
							</div>
							<div class="col-12 col-md-6 col-lg-4 my-2">

								<div class='d-flex align-items-center info'>
									<span class="round-tab"><i class="fa fa-database" aria-hidden="true"></i></span>
									<h5 class='border-bottom d-inline-block pl-2 w-50'>paso 2 <text class='d-none d-xl-inline-block'>[<small class='px-1'>seleccionar origen</small>]</text></h5>
								</div>

								<label for="bd" class='requiredMark mb-0'>ORIGEN DE DATOS</label>
								<select class="form-control select2Cmb dataFont required" id="bd" name="bd[]" data-error="#err_bd" multiple="multiple" required></select>
								<span id="err_bd"></span>
							</div>
							<div class="col-12 col-md-6 col-lg-4 my-2">

								<div class='d-flex align-items-center info'>
									<span class="round-tab"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
									<h5 class='border-bottom d-inline-block pl-2 w-50'>paso 3 <text class='d-none d-xl-inline-block'>[<small class='px-1'>seleccionar campos</small>]</text></h5>
								</div>

								<label for="campo" class='requiredMark mb-0'>BUSCAR POR CAMPO(S)</label>
								<select class="form-control select2Cmb required" id="campo" name="campo[]" data-error="#err_campo" multiple="multiple" required></select>
								<span id="err_campo"></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- /criterios de busqueda -->
		<!-- input busqueda -->
		<div class='col-12'>
			<div class="text-right">
				<strong class="pb-1">[ <a class="" data-toggle="collapse" href="#searchView" aria-expanded="true" aria-controls="searchView"><i class="fa fa-search"aria-hidden="true"></i> Criterios de búsqueda</a> ]</strong>
			</div>

			<form id="frmConfigSearch" novalidate autocomplete="off">
				<div class="card d-none">
					<div class="card-header">
						<div class='d-flex align-items-center'>
							<h3 class='pr-3'><i class="fa fa-info-circle" aria-hidden="true"></i> Información de búsqueda</h3>
							<span class="round-tab"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
							<h5 class='border-bottom d-inline-block pl-2 w-50'>paso 4 <text class='d-none d-xl-inline-block'>[<small class='px-1'>llenar información</small>]</text></h5>
						</div>
					</div>
					<div class="card-body">
						<div class='sectionInsertInputs d-flex flex-wrap justify-content-center'></div>
					</div>
					<div class="card-footer text-right">
						<button class="btn btn-outline-secondary searchBtn" type="submit" disabled='disabled' ><i class="fa fa-search" aria-hidden="true"></i> BUSCAR</button>
					</div>
				</div>
			</form>
		</div>
		<!-- /input busqueda -->
		<div id='searchResult' class='col-12 mt-3 searchResult d-none'>
			<div class='d-flex justify-content-between align-items-end'>
				<h2 class='border-bottom'><i class="fa fa-list-alt" aria-hidden="true"></i> Resultado de la búsqueda</h2>
				<div>
					<button type="button" class="btn btn-outline-danger cancelSearch">Detener búsqueda</button>
					<button type="button" class="btn btn-outline-danger clearSearch d-none">Limpiar resultados</button>
				</div>
			</div>
			<div class="stopProcAlert alert alert-danger my-2 d-none text-center" role="alert">
				<h3>
					Proceso de búsqueda cancelado...!!!
				</h3>
			</div>
			<div id="accordionSearchResult" class='accordion pt-2'>
			</div>
		</div>
	</div>
</div>
