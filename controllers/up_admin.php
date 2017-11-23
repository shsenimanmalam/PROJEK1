<?php
	class up_admin extends Ci_controller{
		function index(){

		
			$this->load->view('header');
			$this->load->view('vup_admin');

		}

		function edit_simpan(){
			$this->load->view('header');
			$username = "admin";

			$password_lama	= $this->input->post('password_lama');
			$password_baru1	= $this->input->post('password_baru1');
			$password_baru2	= $this->input->post('password_baru2');
			$result = $this->db->select('*')->from('admin')->where('username',$username)->limit(1)->get()->row();
			$pl = $result->password;
			if ($password_lama == $pl) {
						if ($password1 == $password2) {
				                $data_password = array(
									'password'	=> $this->input->post('password_baru1')
						        );
								$this->db->where('username',$username);
								$this->db->update('admin',$data_password);              
				                echo '<script>alert("Berhasil Mendaftar !");</script>';
				                redirect('index.php/up_admin');

				            }else{
				                echo '<script>alert("password baru tidak sesuai, periksa kembali password baru!");</script>';
				            }
				        }else{
				        	echo '<script>alert("password lama salah, periksa kembali password lama!");</script>';
				        }
				        
		}


	}


