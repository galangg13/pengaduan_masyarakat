<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation','upload');
        $this->load->model('M_kategori');
    }


	public function index()
	{
        $data['title'] = 'masyarakat Page';
        $data['user'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('template/masyarakat_header',$data);
		$this->load->view('masyarakat/home',$data);
		$this->load->view('template/masyarakat_footer',$data);
	}
	public function  pengaduan()
	{
        $data['title'] = 'pengaduan Page';
        $data['user'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengaduan'] = $this->db->get('pengaduan')->result_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['sub_kategori'] = $this->db->get('sub_kategori')->result_array();
        $data['pengaduanjo'] = $this->m_kategori->pengaduanjo()->result_array();

		$this->load->view('template/masyarakat_header',$data);
		$this->load->view('masyarakat/pengaduan',$data);
		$this->load->view('template/masyarakat_footer',$data);
	}

	public function isipengaduan()
	{
		// $user = $this->db->get_where('masyarakat', ['nik' => $this->session->userdata('nik')])->row_array();
		$tgl_pengaduan = $this->input->post('tgl_pengaduan');
		$isi_laporan = $this->input->post('isi_laporan');
		$kategori = $this->input->post('kategori');
		$sub_kategori = $this->input->post('sub_kategori');
				// upload file
				$config['upload_path']          = './assets/uploads/img/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				
				$this->upload->initialize($config);
		
				$this->upload->do_upload('foto');
				$upload_img = $this->upload->data('file_name');
		$data = array(
			'id_kategori'=>$this->input->post('kategori'),
			'tgl_pengaduan' => $tgl_pengaduan,
			'isi_laporan' => $isi_laporan,
			'kategori' => $kategori,
			'sub_kategori' => $sub_kategori,
			'tgl_pengaduan' => date("Y-m-d"),
			'foto' => $upload_img,
			// 'nik' => $this->session->userdata('nik'),
		); 
		$this->db->insert('pengaduan', $data);
		redirect('Masyarakat/pengaduan');
		// var_dump($user);
	}

    public function get_sub_kategori()
    {
        $id_kategori = $this->input->post('id');
        $sub_kategori = $this->db->get_where('sub_kategori', ['id_kategori' => $id_kategori])->result();
        echo json_encode($sub_kategori);
    }
}