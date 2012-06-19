<?php
	require('fpdf.php');

		    class PDF extends FPDF{
				function Header(){
						$this->SetXY(1,1);
						$this->ClippedCell(18, 0.5, "TEST FONT", 0, 0, "C");
						
						$this->SetFont('Arial', '', 10);
						$this->SetXY(3,3);
						$this->MultiCell(10, 0.4, "Este es un texto de prueba y se puede apreciar por el color salmón de las paredes, que el modo en que fue pintada esta habitación no tuvo nada que ver con el buen gusto que impera en los rododendros que rodean el patio de esta excelsa casa.");
						
						$this->SetFont('Courier', '', 10);
						$this->SetXY(3,7);
						$this->MultiCell(10, 0.4, "Este es un texto de prueba y se puede apreciar por el color salmón de las paredes, que el modo en que fue pintada esta habitación no tuvo nada que ver con el buen gusto que impera en los rododendros que rodean el patio de esta excelsa casa.");
									
					}
				}
		
			$pdfReporte = new PDF('P', 'cm', 'Letter');
			$pdfReporte->AliasNbPages();
			$pdfReporte->SetAutoPageBreak(true, 9);
			$pdfReporte->Header();
			
			//$pdfReporte->AddPage();
			
						
			$pdfReporte->Output();
			
			
			
			?>