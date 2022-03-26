<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if(isset($_POST['password'])){
			$this->load->helper('url');
			$this->load->model('usuario_model');
			if($this->usuario_model->login($_POST['Correo'],$_POST['password'])){
				redirect('Welcome2');
				$this->load->view('Inicio');
			}else{
				redirect('welcome');
			}
		}
      	//cargo el modelo de artículos
		$this->load->view('welcome_message');
	}


}
?>