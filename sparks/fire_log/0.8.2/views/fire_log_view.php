<?php defined('BASEPATH') OR exit('No direct script access allowed');
	$this->session->set_flashdata('css',[
		'vendor' => [],
		'owner' => [
			'assets/Css/general/fireLog.css',
		]
	]);
	$this->session->set_flashdata('js',[
		'vendor' => [],
		'owner' => []
	]);
?>

<div class="m-2">
	<h2 class='border-bottom text-white'><?php echo $log_file_name ?><?php if( $today ) echo ' - ' .$this->lang->line( 'fire_log_today' ); ?></h2>
	<div class="row pt-2 m-0">
		<div class="col-1 mr-0 text-center">
			<strong>Archivos</strong>
			<div class='pt-1 logFilesList'>
				<?php foreach ( $list as $file ){
					echo build_log_link( $file, $log_file_name );
				}?>
			</div>
		</div>
		<div class="col ml-0 border-left">
			<div id="filterBar" class='m-0 text-right pb-3'>
				<?php
				echo build_filter_link( 'all', 'MOSTRAR TODO', 'btn btn-outline-secondary mx-1' );
				echo build_filter_link( 'error', 'ERRORES', 'btn btn-outline-danger mx-1' );
				echo build_filter_link( 'info', 'INFORMACIÓN', 'btn btn-outline-info mx-1' );
				echo build_filter_link( 'debug', 'DEBUGUEO', 'btn btn-outline-warning mx-1' );
				?>
				
				<!-- <a href="<?php echo build_spark_url( array( 'delete'=>$log_file_name ), TRUE )?>" onclick="return confirm('Are You Sure?');" class="deleteFile" >BORRAR ARCHIVO</a>
				<a href="<?php echo build_spark_url( array( 'delete_all' => $log_file_name ), TRUE )?>" onclick="return confirm('Are You Sure?');" class="deleteFile" >BORRAR TODOS LOS ARCHIVOS</a> -->
			</div>
			
			<?php echo str_replace( "&nbsp;", '', $pagination_links ); ?>
			
			<div class="logContainer ">
				<?php echo $log_contents ?>
			</div>

			<?php echo str_replace( "&nbsp;", '', $pagination_links ); ?>
		</div>
	</div>
</div>