<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		
		if (!isset($_SESSION['email'])) {
			redirect('auth');
		}
		$data['title'] = 'Profil';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$this->load->view('templates/dash_header', $data);
		$this->load->view('templates/dash_sidebar', $data);
		$this->load->view('templates/dash_navbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/dash_footer', $data);
	}

	public function surat()
	{
		$data['title'] = 'Manajemen Surat';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['counts'] = $this->db->count_all_results('surat_masuk');

		$this->load->view('templates/dash_header', $data);
		$this->load->view('templates/dash_sidebar', $data);
		$this->load->view('templates/dash_navbar', $data);
		$this->load->view('user/surat', $data);
		$this->load->view('templates/dash_footer', $data);
	}

	public function lihatSurat()
	{
		$data['title'] = 'Surat Masuk';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['menu'] = $this->db->get('surat_masuk')->result_array();
		
		$this->load->view('templates/dash_header', $data);
		$this->load->view('templates/dash_sidebar', $data);
		$this->load->view('templates/dash_navbar', $data);
		$this->load->view('user/lihatSurat', $data);
		$this->load->view('templates/dash_footer', $data);
	}
}