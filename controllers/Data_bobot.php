<?php
	class data_bobot extends Ci_controller{
		function index(){

		
			$this->load->view('header');
			$this->load->Model('model_data_bobot');	
			$data['data_bobot'] = $this->model_data_bobot->list_data_bobot()->result();
			$this->load->view('list_data_bobot',$data);

		}

		function edit_simpan(){
			$this->load->view('header');
			$id = $this->input->post('id');
			$detildatabobot = array(
				'id_bobot' 			=> $this->input->post('id_bobot'),
				'prestasi' 	 		=> $this->input->post('prestasi'),
				'kedisiplinan'   	=> $this->input->post('kedisiplinan'),
				'kehadiran' 	 	=> $this->input->post('kehadiran'),
				'stbobot' 	 	=> $this->input->post('stbobot'));
				$this->db->where('id_bobot',$id);
				$this->db->update('tbl_bobot',$detildatabobot);

				redirect('index.php/data_bobot');

		}


	}


