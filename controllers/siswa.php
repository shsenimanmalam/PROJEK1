<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswa','siswa');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->helper('url');
		$this->load->view('v_siswa');
	}

	public function ajax_list()
	{
		$list = $this->siswa->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswa) {			
            $row[] = $no++;
			$row = array();
            $row[] = $siswa->nis;
            $row[] = $siswa->nama_siswa;
            $row[] = $siswa->jenis_kelamin;
            $row[] = $siswa->kelas;
            $row[] = $siswa->tempat_lahir;
            $row[] = $siswa->tanggal_lahir;
            $row[] = $siswa->nama_orang_tua;
            $row[] = $siswa->tahun;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswa->nis."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswa->nis."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->siswa->count_all(),
						"recordsFiltered" => $this->siswa->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->siswa->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'nis' => $this->input->post('nis'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => $this->input->post('kelas'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'nama_orang_tua' => $this->input->post('nama_orang_tua'),
				'tahun' => $this->input->post('tahun'),
			);
		$insert = $this->siswa->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(/*
				'nis' => $this->input->post('nis'),*/
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => $this->input->post('kelas'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'nama_orang_tua' => $this->input->post('nama_orang_tua'),
				'tahun' => $this->input->post('tahun'),
			);
		$this->siswa->update(array('nis' => $this->input->post('nis')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->siswa->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
