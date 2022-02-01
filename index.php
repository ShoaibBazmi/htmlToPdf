<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);  

        include_once './mpdf/mpdf.php';

		// https://mpdf.github.io/reference/mpdf-functions/construct.html
		$html = file_get_contents('./index.html');
		echo $html;
//        function mPDF($mode='',$format='A4',$default_font_size=0,$default_font='',$mgl=15,$mgr=15,$mgt=16,$mgb=16,$mgh=9,$mgf=9, $orientation='P') {

		$pdf = new mPDF('','COURSECOMPLETIONCERTIFICATE',0,'',0,0,0,0,0,0);
        // var_dump($pdf); die;
		$pdf->SetDisplayMode('fullpage');
        $pdf->showImageErrors = true;
        //generate the PDF!
        $pdf->WriteHTML($html);
        $pdf->Output('./pdf.pdf','F');

?>