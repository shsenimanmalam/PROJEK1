<?php 

class cabout extends CI_Controller{

	public function index(){

		$('#modal_form').modal('show'); // show bootstrap modal
		$this->load->view('header');
	}
}


?>