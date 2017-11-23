<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class claporan_mpe extends CI_Controller {
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
         $data['datampe'] = $this->mlaporan->getAllItem2(); //query model semua barang
         $this->load->view('vlaporan_mpe',$data);
    }

        // fungsi cetak siswa pdf
    public function cetakmpe(){
        $data['title'] = 'Cetak Laporan Perhitungan MPE'; //judul title
        $data['datampe'] = $this->mlaporan->getAllItem2(); //query model semua 
 
        $this->load->view('vcetak_laporan_mpe', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporanmpe.pdf", array("Attachment"=>0));
    }
}
/* End of file claporanpdf.php */
/* Location: ./application/controllers/claporanpdf.php */

