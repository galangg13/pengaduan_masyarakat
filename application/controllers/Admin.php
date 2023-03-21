<?php
defined('BASEPATH') or exit('No direct script access allowed');

class 	Admin extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_kategori');
    }


	public function index()
	{
		$data['title'] = 'Admin Page';
		$data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$data['bar_graph'] = array(
			'pengaduan' => $this->db->get('pengaduan')->num_rows(),
		);

		$this->load->view('template/admin_header', $data);
		$this->load->view('admin/admin', $data);
		$this->load->view('template/admin_footer', $data);
	}
	public function kategori()
	{
		$data['title'] = 'kategori Page';
		$data['user'] = $this->db->get_where('kategori', ['kategori' => $this->session->userdata('kategori')])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['sub_kategori'] = $this->db->get('sub_kategori')->result_array();
        $data['joinbruh'] = $this->m_kategori->joinbruh()->result_array();

		$this->load->view('template/admin_header', $data);
		$this->load->view('admin/kategori', $data);
		$this->load->view('template/admin_footer', $data);
	}
	public function masyarakat()
	{
		$data['title'] = 'masyarakat Page';
		$data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$data['masyarakat'] = $this->db->get('masyarakat')->result_array();

		$this->load->view('template/admin_header', $data);
		$this->load->view('admin/masyarakat', $data);
		$this->load->view('template/admin_footer', $data);
	}
	public function petugas()
	{
		$data['title'] = 'petugas Page';
		$data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$data['petugas'] = $this->db->get('petugas')->result_array();
		
		$this->load->view('template/admin_header', $data);
		$this->load->view('admin/petugas', $data);
		$this->load->view('template/admin_footer', $data);
	}
	public function pengaduan()
	{
		$data['title'] = 'pengaduan Page';
		$data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$data['pengaduanjo'] = $this->m_kategori->pengaduanjo()->result_array();

		$this->load->view('template/admin_header', $data);
		$this->load->view('admin/pengaduan', $data);
		$this->load->view('template/admin_footer', $data);
	}

	public function tambahkategori()
	{
		$kategori = $this->input->post('kategori');
		$data = array(
			'kategori' => $kategori,
		);
		$this->db->insert('kategori', $data);
		redirect('Admin/kategori');
	}

	public function delete_kategori($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
		redirect('Admin/kategori');
	}
	public function delete_subkategori($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('sub_kategori');
		redirect('Admin/kategori');
	}

	public function edit_kategori($id)
	{
		$kategori = $this->input->post('kategori');

		$update = array(
			'kategori' => $kategori,
		);

		$this->db->where('id', $id);
		$this->db->update('kategori', $update);
		redirect('Admin/kategori');
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
		redirect('Admin/kategori');
	}

	public function tambah_subkategori()
    {
        $data = [
            'id_kategori' => $this->input->post('kategori'),
            'sub_kategori' => $this->input->post('sub_kategori'),
	];
        $this->db->insert('sub_kategori', $data);
        $this->m_kategori->joinbruh();
        redirect('Admin/kategori');
    }

	public function delete_masyarakat($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('masyarakat');
		redirect('Admin/masyarakat');
	}

	public function edit_masyarakat($id)
	{
		$masyarakat = $this->input->post('masyarakat');

		$update = array(
			'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'telepon' => $this->input->post('telepon'),
		);

		$this->db->where('id', $id);
		$this->db->update('masyarakat', $update);
		redirect('Admin/masyarakat');
	}

	public function tambah_masyarakat()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'telepon' => $this->input->post('telepon'),
			
	];
        $this->db->insert('masyarakat', $data);
        redirect('Admin/masyarakat');
    }


	public function tambah_petugas()
	{
		$data = [
			'nama_petugas' => $this->input->post('nama_petugas'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'telp' => $this->input->post('telp'),
			'level' => 'petugas',	
	];
		$this->db->insert('petugas', $data);
		redirect('admin/petugas');
	}
	
	// public function edit_masyarakat($id)
	// {
	// 	$petugas = $this->input->post('petugas');

	// 	$update = array(
    //         'nama_petugas' => $this->input->post('nama_petugas'),
    //         'username' => $this->input->post('username'),
	// 		'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //         'telp' => $this->input->post('telp'),
	// 	);

	// 	$this->db->where('id', $id);
	// 	$this->db->update('petugas', $update);
	// 	redirect('admin/petugas');
	// }

	public function edit_petugas($id)
	{
		$petugas = $this->input->post('petugas');

		$update = array(
			'nama_petugas' => $this->input->post('nama_petugas'),
            'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'telp' => $this->input->post('telp'),
		);

		$this->db->where('id', $id);
		$this->db->update('petugas', $update);
		redirect('Admin/petugas');
	}

	public function delete_petugas($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('petugas');
		redirect('Admin/petugas');
	}
}
