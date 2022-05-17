<?php
//require LampC.php
//alter codes

require('fpdf/fpdf.php');

class PDF extends FPDF
{
    //page header
    function Header()
    {
        //title
        $this->SetFont('Arial','B',15);
        $this->Cell(180,10,'LAMPIRAN C (DISEMAK 2010)',0,0,'R');

        //form header


    }
}






?>