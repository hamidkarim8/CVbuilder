<?php 

require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$data=file_get_contents('index.html');


$options = new Options();
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$dompdf->loadHTML($data);
$dompdf->setPaper('A4','Portrait');

$dompdf->render();

file_put_contents('cv.pdf',$dompdf->output());

$dompdf->stream('cv',array('Attachment'=>0));


?>