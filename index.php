<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);  

        include_once './mpdf/mpdf.php';

		// https://mpdf.github.io/reference/mpdf-functions/construct.html
		$html = file_get_contents('./index.html');
		echo $html;
		$pdf = new mPDF('A0','','','','',25,25,55,45,18,12);
        // var_dump($pdf); die;
		// $pdf->SetDisplayMode('fullpage');
        $pdf->showImageErrors = true;
        //generate the PDF!
        $pdf->WriteHTML($html);
        $pdf->Output('./pdf.pdf','F');

?>