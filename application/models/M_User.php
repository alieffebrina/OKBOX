<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_User extends CI_Model {

	function getuser(){
		$this->db->select('*');
        $query = $this->db->get('tb_user');
    	return $query->result();
    }

    function getnama($ida){
        $where = array(
            'id_user' => $ida
        );
        return $this->db->get_where('tb_user',$where)->result();
    }

    function cek_user($kode){
        $this->db->select('*');
        $where = array(
            'username' => $kode
        );
        $query = $this->db->get_where('tb_user', $where);
        return $query->result();
    }

    function tambahdata(){
        $user = array(
            'nik' => $this->input->post('nik'),
            'username' => $this->input->post('username'),
            'nama_user' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
        );
        
        $this->db->insert('tb_user', $user);
    }

    function cekkodeuser(){
        $this->db->select_max('id_user');
        $iduser = $this->db->get('tb_user');
        return $iduser->row();
    }

    function tambahakses($id){
        $total = $this->db->count_all_results('tb_menu');

        for($i=0; $i<$total; $i++){
            $fungsi = array('id_menu' => $i+1 , 
                'id_user' => $id);

            $this->db->insert('tb_akses', $fungsi);            
        }
    }

    function getspek($iduser){
		$this->db->select('*');
        $where = array(
            'id_user' => $iduser
        );
        $query = $this->db->get_where('tb_user', $where);
    	return $query->result();
    }

    function edit(){
        $user = array(
            'nik' => $this->input->post('nik'),
            'username' => $this->input->post('username'),
            'nama_user' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
        );

        $where = array(
            'id_user' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_user',$user);
    }

    
}