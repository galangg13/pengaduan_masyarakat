<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori extends CI_Model
{
    function joinbruh()
    {
        $this->db->select('*');
        $this->db->FROM('sub_kategori');
        $this->db->join('kategori','kategori.id_kategori=sub_kategori.id_kategori');
        return $this->db->get();
    }


    function pengaduanjo()
    {
        $this->db->select('*');
        $this->db->FROM('pengaduan');
        $this->db->join('kategori','kategori.id_kategori=pengaduan.kategori');
        return $this->db->get();
    }
    
}