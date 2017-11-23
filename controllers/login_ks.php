<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login_ks extends CI_Controller{

    function index(){
        $this->load->view('v_login_ks');
    }

    public function aksilogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $result = $this->db->select('*')->from('admin')->where('username',$username)->limit(1)->get()->row();

        if ($result != null) {
            $tb_password = $result->password;
            $tb_username = $result->username;

            if ($username == $result->username && $password == $tb_password){

                $data_session = array(
                    'username' => $tb_password,
                    'password' => $tb_username,
                    'status'   => "login"
                );

                $this->session->set_userdata($data_session);
                /*print_r($data_session);*/
                
                redirect('index.php/kepalasekolah/');
            }else{
                redirect('index.php/login_ks');
            }

        }else{
            redirect('index.php/login_ks');
        }
        
    }
    function logout(){
            redirect('index.php/login_ks');

    }

}
?>

