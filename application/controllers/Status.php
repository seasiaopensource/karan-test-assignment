<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Since this controller is set as the default controller in
	 * config/routes.php, 
	 */
	public function index()
	{
		$this->bottles();
	}

	/**
	 *@role To View revenue Status page
	 *@method GET
	 *@author Karandeep
	 */
	public function bottles($revenue=0){
		$data['revenue'] = $revenue;
		$this->load->view('status',$data);
	}
}
