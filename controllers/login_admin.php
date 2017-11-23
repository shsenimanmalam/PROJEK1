<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login_admin extends CI_Controller{

    function index(){
        $this->load->view('v_login_admin');
    }

    public function aksilogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $result = $this->db->select('*')->from('admin')->where('username',$username)->limit(1)->get()->row();

        if ($result != null) {
            $tb_password = $result->password;
            $tb_username = $result->username;

            if ($username == $result->username && $password == $tb_password){

                $cek = array(
                    'username' => $username,
                );

                $this->session->set_userdata($cek);
                /*print_r($data_session);*/
                
                redirect('index.php/wall/index');
            }else{
                redirect('index.php/login_admin');
            }

        }else{
            redirect('index.php/login_admin');
        }
        
    }
    function logout(){
            redirect('index.php/login_admin');

    }

}
?>

