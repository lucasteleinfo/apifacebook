<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'array' );
		$this->load->library ( 'form_validation' );
		require_once 'assets/facebook-php/src/Facebook/autoload.php';
	}

	public function index() {

		$fb = new Facebook\Facebook([
			'app_id' => '1686504724926931',
			'app_secret' => 'beb83ad44570738c79ae21f6e662a19d',
			'default_graph_version' => 'v2.2',
		]);


		$dados = array (
				'titulo' => 'Projeto Padrão',
				'tela' => '',
				'fb' => $fb
		);
		
		$this->load->view ( 'v_home', $dados );
	}

	public function result() {
		$fb = new Facebook\Facebook([
			'app_id' => '1686504724926931',
			'app_secret' => 'beb83ad44570738c79ae21f6e662a19d',
			'default_graph_version' => 'v2.2',
		]);


		$dados = array (
				'titulo' => 'Projeto Padrão',
				'tela' => 'v_result',
				'fb' => $fb,
				'config' => array (
					'app_id' => '1686504724926931'
				)
		);
		
		$this->load->view ( 'v_home', $dados );
	}
}
