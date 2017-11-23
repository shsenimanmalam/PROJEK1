<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class claporan_siswa extends CI_Controller {
    /*****
     | Laporan PDF dengan DOMPDF
     | controller claporanpdf
     | by gtech
    *****/
 
    public function __construct() {
        parent::__construct();
        $this->load->model('mlaporan');
        $this->load->library('dompdf_gen');
    }
 
    public function index()
    {
        $data['datasiswa'] = $this->mlaporan->getAllItem(); //query model semua barang
        $this->load->view('vlaporan_siswa',$data);
    }
 
    // fungsi cetak siswa pdf
    public function cetaksiswa(){
        $data['title'] = 'Cetak PDF Data Siswa'; //judul title
        $data['datasiswa'] = $this->mlaporan->getAllItem(); //query model semua barang
 
        $this->load->view('vcetak_laporan_siswa', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporansiswa.pdf", array("Attachment"=>0));
    }

}
/* End of file claporanpdf.php */
/* Location: ./application/controllers/claporanpdf.php */

