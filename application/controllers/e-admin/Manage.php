<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manage extends Eadmin_Controller
{
	private $layout;
	private $CUSTOMER_ID;
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'layout';
		$this->CUSTOMER_ID = $this->uri->segment(1, 0);
		//if( !$this->CUSTOMER_ID ) header("Location: http://www.cloudberry.com/");
	}
	public function index()
	{
		$this->viewData['_body'] = $this->load->view( $this->APP . '/login/index-body', array(), true);
		$this->render( $this->layout );
	}

	public function dashboard() {
		echo $this->uri->segment(1) . " / ";
		echo $this->uri->segment(2) . " / ";
		echo $this->uri->segment(3) . " / ";
		//$this->viewData['_body'] = $this->load->view( $this->APP . '/login/index-body', array(), true);
		//$this->render( $this->layout );
	}

}
