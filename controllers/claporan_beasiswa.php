<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class claporan_beasiswa extends CI_Controller {
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
        $data['databeasiswa'] = $this->mlaporan->getAllItem3(); //query model semua barang
        $this->load->view('vlaporan_beasiswa',$data);
    }
 
    // fungsi cetak siswa pdf
    public function cetakbeasiswa(){
        $data['title'] = 'Cetak PDF Data Beasiswa'; //judul title
        $data['databeasiswa'] = $this->mlaporan->getAllItem3(); //query model semua barang
 
        $this->load->view('vcetak_laporan_beasiswa', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporanbeasiswa.pdf", array("Attachment"=>0));
    }

}
/* End of file claporanpdf.php */
/* Location: ./application/controllers/claporanpdf.php */

