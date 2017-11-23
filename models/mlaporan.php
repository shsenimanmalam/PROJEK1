<?php
class mlaporan extends CI_Model {
 
    var $tabel = 'tbl_datasiswa';
     var $tabel2 = 'tbl_hasil';
 
    public function __construct() {
        parent::__construct();
    }
    public function getAllItem() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
        return $query->result();
    }
     public function getAllItem2() {
        $this->db->from($this->tabel2);
        $query = $this->db->get();
        return $query->result();
    }
      public function getAllItem3() {
        $query = $this->db->query("SELECT * FROM tbl_hasil where keterangan = 'mendapat biaya siswa' ");
        return $query->result();
    }
 
}
?>