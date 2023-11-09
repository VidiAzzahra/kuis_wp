<?php
class M_pesawat extends CI_Model{

    function pemesanan($data,$table){
        $this->db->insert($table,$data);
    }

    function transaksi(){
        return $this->db->get('transaksi');
    }
    function getall($table){
        return $this->db->get($table);
    }
function get_data_by_id($table, $where){
    return $this->db->get_where($table, $where);
}
function input_pesanan($table,$data){
    $this->db->insert($table,$data);
}
    // function edit($where,$table){
    //     return $this->db->get_where($table,$where);
    // }

    // function update($where,$data,$table){
    //     $this->db->where($where);
    //     $this->db->update($table,$data);
    // }

    // function hapus($where,$table){
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
}

?>