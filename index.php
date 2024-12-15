<?php 

require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

//dummy data
$logoUrl = 'http://localhost:8089/IDCard/asset/logo.png';
$profilePicUrl = 'http://localhost:8089/IDCard/asset/profilepic.jpg';
$bgImageUrl = 'http://localhost:8089/IDCard/asset/bg.png';

$name = 'NAJUA HANI BINTI ABDUL MANAF';
$position = 'PENOLONG AKAUNTAN';
$icNumber = '830625086178';
$fileNo = '8362';
$bloodType = 'O';
$expiryDate = '25062039';
$emergencyContact = '01123028588';

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <style>
        body {
            font-family: Open Sans, Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0;
            position: relative;
        }

        .id-card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 290px;
            height: 430px;
            background: white;
            border: 2px solid #ccc;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
            position: relative;
            background-image: url("'. $bgImageUrl .'");
            background-position: center 34mm; 
            background-size: 60%; 
            background-repeat: no-repeat; 
        }

        .id-card .header {
            font-size: 10px;
            color: #333;
        }

        .id-card .header img {
            width: 35%;
            margin-bottom: 5px;
        }

        .id-card .profile-pic {
            width: 22mm;
            height: 26mm;
            border-radius: 2px;
            overflow: hidden;
            margin: 3px auto;
        }

        .id-card .profile-pic img {
            left: 17mm; 
            top: 22mm; 
            width: 100%; 
            height: 100%;
        }

        .id-card .details {
            font-family: Open Sans, Arial, sans-serif;
            font-size: 10px; 
            line-height: 1.4;
            color: #333;
            padding: 0 16px; 
        }

        .id-card .details span {
            display: block;
            margin: 3px 0;
        }

        .id-card .details .name {
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            margin-top: 14px;
        }

        .id-card .details .position {
            margin-top: 14px;
            text-align: center;
            font-size: 12px;
        }

        .id-card .details .ic-number {
            font-size: 12px;
            text-align: center;
            margin-bottom: 10px;
            padding: 0 0;
        }

        .id-card .details .info-row {
            width: 100%;
            font-size: 10px;
            line-height: 1.2;
            margin: 2px 0;
        }

        .id-card .details .info-row .left,
        .id-card .details .info-row .right {
            display: inline-block;
            width: 48%;
            vertical-align: top;
            margin: 0;
            padding: 0;
        }

        .id-card .details .info-row .left {
            text-align: left;
        }

        .id-card .details .info-row .right {
            text-align: right;
        }

        .id-card .barcode {
            margin-top: 20px;
        }

        .id-card .barcode img {
            width: 80%;
            height: 100%;
        }
    </style>
</head>
<body>

    <div class="id-card">
        <div class="header">
            <img src="'. $logoUrl .'" alt="Logo">
            <div>
                <span><strong>JABATAN PENGAIRAN DAN SALIRAN MALAYSIA</strong></span>
            </div>
            <div>KEMENTERIAN PERALIHAN TENAGA DAN <br> TRANSFORMASI AIR</div>
        </div>
        <div class="profile-pic">
            <img src="'. $profilePicUrl .'" alt="Profile Picture">
        </div>
        <div class="details">
            <span class="name"><strong>'. $name .'</strong></span>
            <span class="position"><strong>'. $position .'</strong></span>
            <span class="ic-number"><strong>'. $icNumber .'</strong></span>
        
            <div class="info-row">
                <span class="left">NO. FAIL</span>
                <span class="right">'. $fileNo .'</span>
            </div>
            <div class="info-row">
                <span class="left">JENIS DARAH</span>
                <span class="right">'. $bloodType .'</span>
            </div>
            <div class="info-row">
                <span class="left">TARIKH SAH LAKU</span>
                <span class="right">'. $expiryDate .'</span>
            </div>
            <div class="info-row">
                <span class="left">NO. TEL KECEMASAN</span>
                <span class="right">'. $emergencyContact .'</span>
            </div>
        </div>
        <div class="barcode">
            <div style="text-align: center;">
                <img src="data:image/jpg;base64,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">
              </div>
       </div>
    </div>

</body>
</html>';


$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

$dompdf->loadHTML($html);
$dompdf->setPaper('A4','Portrait');

$dompdf->render();

file_put_contents('idcard.pdf',$dompdf->output());

$dompdf->stream('idcard',array('Attachment'=>0));


?>