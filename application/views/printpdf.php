
<?php
require('fpdf.php');
error_reporting(0);
class PDF extends FPDF
{
// Page header
function Header1($header)
{	// Logo
	// Attributes
	// 1. Path of the image to be display
	// 2. Left coordinate
	// 3. Top Coordinate
	// 4. Image size(in %)
	$this->Image(base_url().'/assets/images/logow.png',58,6,100);
	// Line break
	$this->Ln(7);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,$header,0,0,'C');
    // Line break
    $this->Ln(16);
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
	$w = array(90, 60);	
	$this->SetFont('Times','',12);
	$this->SetX(40);
	if($key == 'ImageName'){$this->Ln(3);$this->setX(40);$this->Cell($w[0],10,'Updated Picture');}
	else $this->Cell($w[0],10,$key,1);
	$this->SetX(-80);
	if($key!='ImageName'){
		$this->Cell($w[1],10,$value,1,1);
	}else{
		//$value = 'cf47d358655f73cf78c71db3d52420ee.png';
		if($value)$this->Image(base_url().'/files/'.$value,131,265,25);
	}
	
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

