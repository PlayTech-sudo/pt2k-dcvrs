<?php
session_start();
include '../function/dbconn.php';
// include '../../functions/general.php';
$id = $_GET['id'];
$name = $_GET['uname'];


require('pdf_js.php');
require_once('phpqrcode/qrlib.php');

class PDF extends FPDF
{
	function Footer()
  {
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Designed By PlayTech.in',0,0,'C');
  }

}
$_SESSION['ip'] = "116.66.188.61";
$ip = $_SESSION['ip'];
// $id = $_GET['id'];
$url = "http://".$ip."/hrms/user/policedocview.php?id=".$id;
// $url = "http://localhost/Projects/hrms/user/policedocview.php";

QRcode::png($url, "qrcode.png");

$pdf = new PDF('P','mm','A4');

$pdf->AddPage(); 

$pdf->SetFont("Times", "B", "28");
// $pdf->Cell(0, 15, $_GET['id'], 0, 1, "C");

// $pdf->SetFont("Times", "B", "22");
$pdf->Cell(0, 10, 'SCAN TO CHECK THE DOCUMENT', 0, 1, "C"); 

// $pdf->SetFont("Times", "B", "18");
$pdf->Cell(0, 20, $name, 0, 1, "C"); 

$pdf->Image("qrcode.png",65, 100, 80, 90, "png");

$pdf->output();

?>