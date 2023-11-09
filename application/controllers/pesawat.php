<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat extends CI_Controller {

function __construct(){
    parent::__construct();
    $this->load->model('m_pesawat');
}
	public function index()
	{
		$this->load->view('pemesanan');
	}
    public function tambah_aksi(){
        $nama = $this->input->post('nama');
        $nama_pesawat = $this->input->post('kode_pesawat');
        $kelas = $this->input->post('kelas');
        $jml_tiket = $this->input->post('jml_tiket');

        $where = array(
            'kelas' => $kelas,
            'nama_pesawat' => $nama_pesawat
        );
        // var_dump($where);
        $cek = $this->m_pesawat->get_data_by_id('pesawat',$where)->result();
        var_dump($cek);
        $harga = 0;
        foreach($cek as $item){
            $harga = $item->harga_tiket;
        }
        $tot_harga = $harga * $jml_tiket ;
        // var_dump($harga);
        // var_dump($jml_tiket);
        // var_dump($tot_harga);
        $data = array (
            'nama_pemesan' => $nama,
            'nama_pesawat' => $nama_pesawat,
            'kelas' => $kelas,
            'harga_tiket' => $harga,
            'jml_tiket' => $jml_tiket,
            'total_bayar' => $tot_harga
        );

        $this->m_pesawat->input_pesanan('pemesanan',$data);
        redirect('pesawat/pesanan');
    }
    public function pesanan(){
        $data['pesanan'] = $this->m_pesawat->getall('pemesanan')->result();
        $this->load->view('transaksi',$data);
    }
}
