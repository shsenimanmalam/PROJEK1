<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class wall extends CI_Controller {
		function __construct(){
		        parent::__construct();
		        $cek = 	$this->session->userdata('username');
		        if($cek != "admin"){
		            redirect('index.php/login_admin');
        }
    }

		function index(){
			$this->load->view('header');
		}
}

