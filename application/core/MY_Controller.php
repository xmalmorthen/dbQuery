<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
    public $response = array();

	private function localRouteCheckAccess(){
		if (!$this->input->is_ajax_request()){
			redirect('/Error/noPrivilegio/');
		} else {
			$this->response['message'] = 'Acción no permitida - Privilegios insuficientes';
			$this->output
				->set_status_header(404)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($this->response))
				->_display();
			exit;
		}
	}

    public function __construct($roles)
    {
        parent::__construct();

        $this->response = array(
			'status' => false,
			'message'=> 'Error desconocido',
			'data'=> null
		);

		if (checkAccess($roles) === false)
			$this->localRouteCheckAccess();
    }
    
}
