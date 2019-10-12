<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Surat Masuk';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['counts2'] =$this->db->select('*')->from('surat_masuk')->where('status', 'menunggu')->count_all_results();
		$this->load->view('templates/dash_header', $data);
		$this->load->view('templates/dash_sidebar', $data);
		$this->load->view('templates/dash_navbar', $data);
		$this->load->view('surat/surat_masuk', $data);
		$this->load->view('templates/dash_footer', $data);
	}
	public function surat_Masuk()
	{
		$this->form_validation->set_rules('tgl_surat', 'Tgl_surat', 'required|trim');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required|trim');
		$this->form_validation->set_rules('penerima', 'Penerima', 'required|trim');
		$this->form_validation->set_rules('noSuratMasuk', 'NoSuratMasuk', 'required|trim');
		$this->form_validation->set_rules('pengirim', 'Pengirim', 'required|trim');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');
		$this->form_validation->set_rules('sifatSurat', 'SifatSurat', 'required|trim');

		if ( $this->form_validation->run() == false ) {
			$data['title'] = 'Surat Masuk';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/dash_header', $data);
			$this->load->view('templates/dash_sidebar', $data);
			$this->load->view('templates/dash_navbar', $data);
			$this->load->view('surat/surat_masuk', $data);
			$this->load->view('templates/dash_footer', $data);
		} else {
			$data = [
				'tanggal_masuk' => htmlspecialchars($this->input->post('tgl_surat', true)),
				'tujuan' => htmlspecialchars($this->input->post('tujuan', true)),
				'penerima' => htmlspecialchars($this->input->post('penerima', true)),
				'no_surat_masuk' => htmlspecialchars($this->input->post('noSuratMasuk', true)),
				'pengirim' => htmlspecialchars($this->input->post('pengirim', true)),
				'perihal' => htmlspecialchars($this->input->post('perihal', true)),
				'sifat_surat' => htmlspecialchars($this->input->post('sifatSurat', true)),
				'status' => 'menunggu'
			];
			$this->db->insert('surat_masuk', $data);
			redirect('user/surat');
		}

	}


	public function disposisi()
	{
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
		$this->form_validation->set_rules('status', 'status', 'required|trim');

		if ( $this->form_validation->run() == false ) {
			echo "gagal";
			$data['title'] = 'Surat Masuk';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['menu'] = $this->db->get('surat_masuk')->result_array();
		$data['counts2'] =$this->db->select('*')->from('surat_masuk')->where('status', 'menunggu')->count_all_results();

			$this->load->view('templates/dash_header', $data);
			$this->load->view('templates/dash_sidebar', $data);
			$this->load->view('templates/dash_navbar', $data);
			$this->load->view('user/lihatSurat', $data);
			$this->load->view('templates/dash_footer', $data);
		} else {
			echo "berhasil";
			$keterangan = $this->input->post('keterangan');
			$status = $this->input->post('status');
			$noUrut = $this->input->post('noUrut');

			$this->db->set('disposisi', $keterangan);
			$this->db->set('status', $status);
			$this->db->where('no_urut', $noUrut);
			$this->db->update('surat_masuk');

			redirect('user/lihatSurat');
		}
	}
}