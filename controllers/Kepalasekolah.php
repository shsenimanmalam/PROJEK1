<?php 
	
defined('BASEPATH') OR exit('No direct script access allowed');

class kepalasekolah extends CI_Controller{
		function __construct(){
		        parent::__construct();
		        if($this->session->userdata('status') != "login"){
		            redirect('index.php/login_ks');
        }
    }

		function index(){
        	$username = $this->session->userdata('username');
			$this->load->view('headerKS');
		}
}

 