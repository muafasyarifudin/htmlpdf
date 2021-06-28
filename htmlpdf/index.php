<?php
	$html = ob_get_contents();
	ob_end_clean();
	require __DIR__.'(masukkan direktori halaman cetak)';
	use Spipu\Html2Pdf\Html2Pdf;
	$html2pdf = new Html2Pdf('L','A4','fr', true, 'UTF-8', array(15, 15, 15, 15), false); 
	$html2pdf->writeHTML($html);
	$html2pdf->output("Data Aset $nama_wakif.pdf","D");
?>
