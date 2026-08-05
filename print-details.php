<?php
include('config.php');

// Check if dompdf is available
if (!file_exists('dompdf/autoload.inc.php')) {
    die("Error: DomPDF library not found. Please install it first.");
}

require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// Validate Email parameter
if (!isset($_GET['Email'])) {
    die("Error: Email parameter is required");
}

$Email = mysqli_real_escape_string($con, $_GET['Email']);
$sql = mysqli_query($con, "SELECT * FROM booking WHERE Email='$Email'");
$user = mysqli_fetch_assoc($sql);

if (!$user) {
    die("Error: No booking found for this email");
}

$dompdf = new Dompdf();
ob_start();
require('details_pdf.php');
$html = ob_get_contents();
ob_end_clean();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Check for rendering errors
if ($dompdf->get_canvas()->get_cpdf()->numObj <= 0) {
    die("Error: Failed to render PDF");
}

$dompdf->stream('booking-details.pdf', ['Attachment' => false]);
?>