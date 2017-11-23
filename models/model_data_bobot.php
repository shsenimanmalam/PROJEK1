<?php
	class model_data_bobot extends CI_Model {
		function list_data_bobot(){
			$data_bobot = $this->db->get('tbl_bobot');
			return $data_bobot;
		}

	}