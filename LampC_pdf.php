<?php
//require LampC.php
//alter codes

// catch raw bank, explode by |
$bank = explode('|', $_POST['bank']);
$nama_bank = $bank[0];
$kod_bank = $bank[1];
$length_required = $bank[2];

require('fpdf/fpdf.php');

class PDF extends FPDF
{
    //page header
    function Header()
    {
              //title
              $this->SetFont('Arial','B',15);
              $this->Cell(180,20,'LAMPIRAN C (DISEMAK 2010)',0,0,'C');

              //Form header
              $this->SetFont('Arial','',12);
              $this->Cell(-180,40,'Borang Pengesahan Akaun Bank untuk Pembayaran',0,0,'C');
              
              $this->SetFont('Arial','B',12);
              $this->Cell(180,50,'Elaun/Baucar Bayaran Am',0,0,'C');
      
              $this->SetFont('Arial','U',12);
              $this->Cell(-180,60,'Melalui Alliance Online Banking',0,0,'C');
    }

    function footer()
    {

        //footer sini

    }
}

$pdf = new PDF();
$pdf->AddPage();


//--------------------------------------Nama Syarikat----------------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(71.5, 90, 'Nama Syarikat/Perniagaan :', 0, 0, 'R');
$box = 17; // preset left margin
$full_name = wordwrap(strtoupper(trim($_POST['company_name'])), 20, "\n");
$lines = explode("\n", $full_name); // max 3 lines only (index 0,1,2)

$pdf->SetFont('Arial', '', 12);
// line 1
$data1 = str_split($lines[0]);
for($i=0; $i<20; $i++) {
    $letter = isset($data1[$i]) ? $data1[$i] : '';
    $pdf->SetXY($box+=8, 57);
    $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
    $pdf->Ln(5);
}

// line 2
if (isset($lines[1])) { // not empty   
    $box = 17; // reset left margin
    $data2 = str_split($lines[1]);
    for($i=0; $i<20; $i++) {
        $letter = isset($data2[$i]) ? $data2[$i] : '';
        $pdf->SetXY($box+=8, 65);
        $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
        $pdf->Ln(6);
    }
} else { // render blank box
    $box = 17; // reset left margin
    for($i=0; $i<20; $i++) {
        $pdf->SetXY($box+=8, 65);
        $pdf->Cell(8, 8, '', 1, 0, 'C'); 
        $pdf->Ln(6);
    }
}

// line 3
if (isset($lines[2])) { // not empty   
    $box = 17; // reset left margin
    $data3 = str_split($lines[2]);
    for($i=0; $i<20; $i++) {
        $letter = isset($data3[$i]) ? $data3[$i] : '';
        $pdf->SetXY($box+=8, 73);
        $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
        $pdf->Ln(6);
    }
} else { // render blank box
    $box = 17; // reset left margin
    for($i=0; $i<20; $i++) {
        $pdf->SetXY($box+=8, 73);
        $pdf->Cell(8, 8, '', 1, 0, 'C'); 
        $pdf->Ln(6);
    }
}

//--------------------------------------Alamat Syarikat----------------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(74.2, 20, 'Alamat Syarikat/Perniagaan :', 0, 0, 'R');
$box = 17; // preset left margin
$full_name = wordwrap(strtoupper(trim($_POST['company_address'])), 20, "\n");
$lines = explode("\n", $full_name); // max 3 lines only (index 0,1,2)

$pdf->SetFont('Arial', '', 12);
// line 1
$data1 = str_split($lines[0]);
for($i=0; $i<20; $i++) {
    $letter = isset($data1[$i]) ? $data1[$i] : '';
    $pdf->SetXY($box+=8, 91);
    $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
    $pdf->Ln(5);
}

// line 2
if (isset($lines[1])) { // not empty   
    $box = 17; // reset left margin
    $data2 = str_split($lines[1]);
    for($i=0; $i<20; $i++) {
        $letter = isset($data2[$i]) ? $data2[$i] : '';
        $pdf->SetXY($box+=8, 99);
        $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
        $pdf->Ln(6);
    }
} else { // render blank box
    $box = 17; // reset left margin
    for($i=0; $i<20; $i++) {
        $pdf->SetXY($box+=8, 99);
        $pdf->Cell(8, 8, '', 1, 0, 'C'); 
        $pdf->Ln(6);
    }
}

// line 3
if (isset($lines[2])) { // not empty   
    $box = 17; // reset left margin
    $data3 = str_split($lines[2]);
    for($i=0; $i<20; $i++) {
        $letter = isset($data3[$i]) ? $data3[$i] : '';
        $pdf->SetXY($box+=8, 107);
        $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
        $pdf->Ln(6);
    }
} else { // render blank box
    $box = 17; // reset left margin
    for($i=0; $i<20; $i++) {
        $pdf->SetXY($box+=8, 107);
        $pdf->Cell(8, 8, '', 1, 0, 'C'); 
        $pdf->Ln(6);
    }
}

//--------------------------------------Alamat Peti Surat----------------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(54, 20, 'Alamat Peti Surat :', 0, 0, 'R');
$box = 17; // preset left margin
$full_name = wordwrap(strtoupper(trim($_POST['mailbox'])), 20, "\n");
$lines = explode("\n", $full_name); // max 3 lines only (index 0,1,2)

$pdf->SetFont('Arial', '', 12);
// line 1
$data1 = str_split($lines[0]);
for($i=0; $i<20; $i++) {
    $letter = isset($data1[$i]) ? $data1[$i] : '';
    $pdf->SetXY($box+=8, 125);
    $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
    $pdf->Ln(5);
}

// line 2
if (isset($lines[1])) { // not empty   
    $box = 17; // reset left margin
    $data2 = str_split($lines[1]);
    for($i=0; $i<20; $i++) {
        $letter = isset($data2[$i]) ? $data2[$i] : '';
        $pdf->SetXY($box+=8, 133);
        $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
        $pdf->Ln(6);
    }
} else { // render blank box
    $box = 17; // reset left margin
    for($i=0; $i<20; $i++) {
        $pdf->SetXY($box+=8, 133);
        $pdf->Cell(8, 8, '', 1, 0, 'C'); 
        $pdf->Ln(6);
    }
}

// line 3
if (isset($lines[2])) { // not empty   
    $box = 17; // reset left margin
    $data3 = str_split($lines[2]);
    for($i=0; $i<20; $i++) {
        $letter = isset($data3[$i]) ? $data3[$i] : '';
        $pdf->SetXY($box+=8, 141);
        $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
        $pdf->Ln(6);
    }
} else { // render blank box
    $box = 17; // reset left margin
    for($i=0; $i<20; $i++) {
        $pdf->SetXY($box+=8, 141);
        $pdf->Cell(8, 8, '', 1, 0, 'C'); 
        $pdf->Ln(6);
    }
}

//--------------------------------------Emel-----------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 20, 'E-mel :', 0, 0, 'R');
$pdf->SetXY(25, 159);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(160, 8, $_POST['user_email'], 1, 0, 'L');
$pdf->Ln(5);

//--------------------------------------Nombor telefon (Pejabat)-----------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 20, 'Nombor Telefon (Pejabat) :', 0, 0, 'R');
$box = 10.5;
$offphone = str_split($_POST['office_num']);
$pdf->SetFont('Arial', '', 12);
for($i=0; $i<11; $i++) { // no.hp maxlength = 11 (xxx-xxxxxxxx)
    $digit = isset($offphone[$i]) ? $offphone[$i] : '';
    $pdf->SetXY($box+=14.6, 176);
    $pdf->Cell(14.6, 8, $digit, 1, 0, 'C');
    $pdf->Ln(5);
}

//--------------------------------------Nombor telefon (Bimbit)-----------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(68, 20, 'Nombor Telefon (Bimbit) :', 0, 0, 'R');
$box = 10.5;
$offphone = str_split($_POST['mobile_num']);
$pdf->SetFont('Arial', '', 12);
for($i=0; $i<11; $i++) { // no.hp maxlength = 11 (xxx-xxxxxxxx)
    $digit = isset($offphone[$i]) ? $offphone[$i] : '';
    $pdf->SetXY($box+=14.6, 193);
    $pdf->Cell(14.6, 8, $digit, 1, 0, 'C');
    $pdf->Ln(5);
}

//--------------------------------------Nombor kp-----------------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(68.5, 20, 'Nombor Kad Pengenalan :', 0, 0, 'R');
$box = 11.5;
$mykad = str_split(trim($_POST['mykad']));
$pdf->SetFont('Arial', '', 12);
for($i=0; $i<12; $i++) {
    $digit = isset($mykad[$i]) ? $mykad[$i] : '';
    $pdf->SetXY($box+=13.4, 210);
    $pdf->Cell(13.4, 8, $digit, 1, 0, 'C'); 
    $pdf->Ln(5);
}

//--------------------------------------Nombor Akaun Bank --------------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(60.5, 20, 'Nombor Akaun Bank :', 0, 0, 'R');
$box = 15 ;
$acc = trim($_POST['acc_number']);
if(strlen($acc) == $length_required )
{
// kalo length sama validation passed
for($i=0; $i<16; $i++) {
    $acc = str_split($_POST['acc_number']);
    $pdf->SetFont('Arial', '', 12);
    for($i=0; $i<16; $i++) {
        $digit = isset($acc[$i]) ? $acc[$i] : '';
        $pdf->SetXY($box+=10.06, 227);
        $pdf->Cell(10.06, 8, $digit, 1, 0, 'C');
        $pdf->Ln(5); }
}
}
else
{
    //notice for unmatch maxlength should go here : review later
    for($i=0; $i<16; $i++) {
        $acc = str_split('ERROR MAX LENGTH');
        $pdf->SetFont('Arial', '', 12);
        for($i=0; $i<16; $i++) {
            $digit = isset($acc[$i]) ? $acc[$i] : '';
            $pdf->SetXY($box+=10.06, 227);
            $pdf->Cell(10.06, 8, $digit, 1, 0, 'C');
            $pdf->Ln(5); }
    }
}

//--------------------------------------Nama Bank----------------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(41.5, 20, 'Nama Bank :', 0, 0, 'R');
$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(25, 244);
$pdf->Cell(161, 8, $nama_bank.' ('.$kod_bank.')', 1, 0, 'L');
$pdf->Ln(5);

//--------------------------------------Cawangan Bank----------------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(51, 20, 'Cawangan Bank :', 0, 0, 'R');
$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(25, 261);
$pdf->Cell(161, 8, $_POST['cawangan'], 1, 0, 'L');
$pdf->Ln(5);

$pdf->Output();
?>