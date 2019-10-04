<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Surat Masuk';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('surat/surat_masuk', $data);
	}
	public function surat_Masuk()
	{
		$this->form_validation->set_rules('tgl_surat', 'Tgl_surat', 'required|trim');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required|trim');
		$this->form_validation->set_rules('penerima', 'Penerima', 'required|trim');
		$this->form_validation->set_rules('noSuratMasuk', 'NoSuratMasuk', 'required|trim');
		$this->form_validation->set_rules('pengirim', 'Pengirim', 'required|trim');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
		$this->form_validation->set_rules('sifatSurat', 'SifatSurat', 'required|trim');

		if ( $this->form_validation->run() == false ) {
			$data['title'] = 'Surat Masuk';
			$this->load->view('surat/surat_masuk', $data);
		} else {
			$data = [
				'tanggal_masuk' => htmlspecialchars($this->input->post('tgl_surat', true)),
				'tujuan' => htmlspecialchars($this->input->post('tujuan', true)),
				'penerima' => htmlspecialchars($this->input->post('penerima', true)),
				'no_surat_masuk' => htmlspecialchars($this->input->post('noSuratMasuk', true)),
				'pengirim' => htmlspecialchars($this->input->post('pengirim', true)),
				'perihal' => htmlspecialchars($this->input->post('perihal', true)),
				'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
				'sifat_surat' => htmlspecialchars($this->input->post('sifatSurat', true))
			];

			$this->db->insert('surat_masuk', $data);
			redirect('user/surat');
		}
	}
}