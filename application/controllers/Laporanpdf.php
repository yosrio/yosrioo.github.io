<?php
Class Laporanpdf extends CI_Controller{


    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',24);
        $pdf->Cell(40,10,'Disposisi Surat',0,1);
        $surat = $this->db->get_where('surat_masuk', ['no_urut' => '8'])->row_array();
        $pdf->SetFont('Arial','B',20);
        $pdf->cell(40,10,'No: '.$surat['no_surat_masuk'],0,1);
        $pdf->Output('laporan'.'2'.'.pdf','I');
    }
}