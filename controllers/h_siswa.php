<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class h_siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mh_siswa','h_siswa');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->helper('url');
		$this->load->view('vh_siswa');

	}

	public function ajax_list()
	{
		$list = $this->h_siswa->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $h_siswa) {			
            $row[] = $no++;
			$row = array();
            $row[] = $h_siswa->nis;
            $row[] = $h_siswa->nama_siswa;
            $row[] = $h_siswa->nilai_prestasi;
            $row[] = $h_siswa->nilai_disiplin;
            $row[] = $h_siswa->nilai_absensi;
            $row[] = $h_siswa->nilai_mpe;
            $row[] = $h_siswa->keterangan;
            $row[] = $h_siswa->tahun;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$h_siswa->nis."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->h_siswa->count_all(),
						"recordsFiltered" => $this->h_siswa->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->h_siswa->get_by_id($id);
		echo json_encode($data);
	}


	public function ajax_add()

	{
				$db_host = 'localhost'; // Nama Server
				$db_user = 'root'; // User Server
				$db_pass = ''; // Password Server
				$db_name = 'db_biayasiswa'; // Nama Database

				$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
				$sql = 'SELECT prestasi , kedisiplinan , kehadiran ,stbobot FROM tbl_bobot';
				$query = mysqli_query($conn, $sql);

			$row = mysqli_fetch_array($query);
			$a = $row['prestasi'];
			$b = $row['kedisiplinan'];
			$c = $row['kehadiran'];
			$d = $row['stbobot'];

			$pangkat1 = $this->input->post('nilai_prestasi');
			$pangkat2 = $this->input->post('nilai_disiplin');
			$pangkat3 = $this->input->post('nilai_absensi');
			$tot = pow($pangkat1,$a)+pow($pangkat2,$b)+pow($pangkat3,$c);

			if
			($tot >= $d)
			{
				$k_hasil = "MENDAPAT BIAYA SISWA";
			}
			else
			{
				$k_hasil = "TIDAK MENDAPAT BIAYA SISWA";
			}
		$data = array(
				'nis' => $this->input->post('nis'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'nilai_prestasi' => $this->input->post('nilai_prestasi'),
				'nilai_disiplin' => $this->input->post('nilai_disiplin'),
				'nilai_absensi' => $this->input->post('nilai_absensi'),
				'nilai_mpe' => $tot,
				'keterangan' => $k_hasil,
				'tahun' => $this->input->post('tahun')
			);

		$insert = $this->h_siswa->save($data);
		echo json_encode(array("status" => TRUE));


			
	}


	public function ajax_delete($id)
	{
		$this->h_siswa->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}




}
