<?php
        include_once './mpdf/mpdf.php';

		//https://mpdf.github.io/reference/mpdf-functions/construct.html
		$html = file_get_contents('./index.html');
		echo $html;
		$pdf = new mPDF('L','','','','',25,25,55,45,18,12);
		$pdf->SetDisplayMode('fullpage');
        $pdf->showImageErrors = true;
        //generate the PDF!
        $pdf->WriteHTML($html);
        $pdf->Output('./pdf.pdf','F');

?>