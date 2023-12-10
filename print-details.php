<?php
include('config.php');
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$Email = $_GET['Email'];
$sql = mysqli_query($con,"Select * from booking where Email='$Email'");
$user = mysqli_fetch_assoc($sql);

$dompdf = new Dompdf();
ob_start();
require('details_pdf.php');
$html=ob_get_contents();
ob_get_clean();

$dompdf->loadHtml($html);


$dompdf->setPaper('A4', 'landscape');
$dompdf->setpaper('A4', 'portrait');


$dompdf->render();


$dompdf->stream('print-details.pdf',['Attachment'=>false]);