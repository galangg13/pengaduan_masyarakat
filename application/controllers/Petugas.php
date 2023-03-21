<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_kategori');
    }


	public function index()
	{
		$data['title'] = 'petugas Page';
		$data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('template/petugas_header', $data);
		$this->load->view('petugas/home', $data);
		$this->load->view('template/petugas_footer', $data);
	}
	public function kategori()
	{
		$data['title'] = 'kategori Page';
		$data['user'] = $this->db->get_where('kategori', ['kategori' => $this->session->userdata('kategori')])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['sub_kategori'] = $this->db->get('sub_kategori')->result_array();
        $data['joinbruh'] = $this->m_kategori->joinbruh()->result_array();

		$this->load->view('template/petugas_header', $data);
		$this->load->view('petugas/kategori', $data);
		$this->load->view('template/petugas_footer', $data);
	}
	public function masyarakat()
	{
		$data['title'] = 'masyarakat Page';
		$data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$data['masyarakat'] = $this->db->get('masyarakat')->result_array();

		$this->load->view('template/petugas_header', $data);
		$this->load->view('petugas/masyarakat', $data);
		$this->load->view('template/petugas_footer', $data);
	}
	public function petugas()
	{
		$data['title'] = 'petugas Page';
		$data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$data['petugas'] = $this->db->get('petugas')->result_array();

		$this->load->view('template/petugas_header', $data);
		$this->load->view('petugas/petugas', $data);
		$this->load->view('template/petugas_footer', $data);
	}
	public function pengaduan()
	{
		$data['title'] = 'pengaduan Page';
		$data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$data['pengaduanjo'] = $this->m_kategori->pengaduanjo()->result_array();

		$this->load->view('template/petugas_header', $data);
		$this->load->view('petugas/pengaduan', $data);
		$this->load->view('template/petugas_footer', $data);
	}

	public function tambahkategori()
	{
		$kategori = $this->input->post('kategori');
		$data = array(
			'kategori' => $kategori,
		);
		$this->db->insert('kategori', $data);
		redirect('Petugas/kategori');
	}

	public function delete_kategori($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kategori');
		redirect('Petugas/kategori');
	}
	public function delete_subkategori($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('sub_kategori');
		redirect('Petugas/kategori');
	}

	public function edit_kategori($id)
	{
		$kategori = $this->input->post('kategori');

		$update = array(
			'kategori' => $kategori,
		);

		$this->db->where('id', $id);
		$this->db->update('kategori', $update);
		redirect('Petugas/kategori');
	}
	public function edit_subkategori($id)
	{
		$kategori = $this->input->post('kategori');
		$sub_kategori = $this->input->post('sub_kategori');

		$update = array(
			'kategori' => $kategori,
			'sub_kategori' => $sub_kategori,
		);

		$this->db->where('id', $id);
		$this->db->update('sub_kategori', $update);
		redirect('Petugas/kategori');
	}

	public function tambah_subkategori()
    {
        $data = [
            'id_kategori' => $this->input->post('kategori'),
            'sub_kategori' => $this->input->post('sub_kategori'),
	];
        $this->db->insert('sub_kategori', $data);
        $this->m_kategori->joinbruh();
        redirect('Petugas/kategori');
    }
}
