<?php
require('fpdf.php');
error_reporting(0);
class PDF extends FPDF
{
// Page header
function Header1($header)
{	// Logo
	$this->Image(base_url().'/assets/images/logow.png',55,6,100);
	// Line break
	$this->Ln(10);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,$header,0,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer1($footer = '')
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function display($key, $value){	
	$this->SetFont('Times','',12);
	$this->SetX(40);
	$this->Cell(10,10,$key,0);
	$this->SetX(-60);
	$this->Cell(10,10,$value,0,1);
}


}
// Instantiation of inherited class

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Header1('Personal Info');
$temp = array_keys((array)$personal_info);
foreach($temp as $key){
$pdf->display($key, $personal_info->$key);
}

$pdf->AddPage();
$pdf->Header1('Educational Info');
$temp = array_keys((array)$educational_info);
foreach($temp as $key)
$pdf->display($key, $educational_info->$key);


$pdf->AddPage();
$pdf->Header1('Payment Info');
$temp = array_keys((array)$payment_info);
foreach($temp as $key)
$pdf->display($key, $payment_info->$key);

$pdf->Output();
?>