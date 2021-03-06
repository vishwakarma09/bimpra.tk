<?php 
class Pdfexample extends CI_Controller{
	
	public function __construct() { 
		parent::__construct();
	}
 
	public function index()
	{
		$this->load->library('Pdf');
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetTitle('Pdf Example');
		$pdf->SetHeaderMargin(30);
		$pdf->SetTopMargin(20);
		$pdf->setFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default');
		$pdf->Write(5, 'CodeIgniter TCPDF Integration');
		$pdf->Output('pdfexample.pdf', 'I');
	}
}
?>