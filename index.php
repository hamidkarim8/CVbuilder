<?php
require 'vendor/autoload.php'; // Load dompdf using Composer's autoloader

use Dompdf\Dompdf;

$dompdf = new Dompdf();

// HTML content for the PDF
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }
        .header {
            background-color: #2e7db8;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            letter-spacing: 1.5px;
        }
        .header h2 {
            margin: 5px 0;
            font-size: 18px;
            font-weight: normal;
        }
        .contact-info {
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-info p {
            margin: 3px 0;
            color: #555;
        }
        .section-title {
            background-color: #00a651;
            color: #fff;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 15px;
        }
        .content-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .content-left, .content-right {
            width: 48%;
        }
        table {
            width: 100%;
            border-spacing: 0;
        }
        table td {
            padding: 5px;
            color: #333;
            font-size: 14px;
            vertical-align: top;
        }
        table .label {
            font-weight: bold;
            color: #555;
            width: 40%;
        }
        table .blue {
            color: #2e7db8;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h1>MOHD SUFIAN BIN MOHD TARMIZI</h1>
            <h2>PEGAWAI TEKNOLOGI MAKLUMAT</h2>
        </div>
        
        <!-- Contact Information Section -->
        <div class="contact-info">
            <p>Email Utama: sufian@water.gov.my | Email Peribadi: sufian@gmail.com</p>
            <p>No. Telefon: 013-1234213</p>
        </div>

        <!-- Personal Information Section -->
        <div class="section-title">Butiran Peribadi</div>
        <div class="content-section">
            <div class="content-left">
                <table>
                    <tr>
                        <td class="label">No. Kad Pengenalan</td>
                        <td class="blue">801011-10-1234</td>
                    </tr>
                    <tr>
                        <td class="label">No. Kad Pengenalan Lama</td>
                        <td class="blue">-</td>
                    </tr>
                    <tr>
                        <td class="label">Tarikh Lahir</td>
                        <td class="blue">11/10/1988</td>
                    </tr>
                    <tr>
                        <td class="label">Tempat Lahir</td>
                        <td class="blue">Hospital Kajang</td>
                    </tr>
                    <tr>
                        <td class="label">Jantina</td>
                        <td class="blue">Lelaki</td>
                    </tr>
                    <tr>
                        <td class="label">Bangsa</td>
                        <td class="blue">Melayu</td>
                    </tr>
                    <tr>
                        <td class="label">Agama</td>
                        <td class="blue">Islam</td>
                    </tr>
                    <tr>
                        <td class="label">Jenis Darah</td>
                        <td class="blue">AB+</td>
                    </tr>
                    <tr>
                        <td class="label">Telefon Bimbit</td>
                        <td class="blue">013-1234213</td>
                    </tr>
                    <tr>
                        <td class="label">Lesen Memandu</td>
                        <td class="blue">B, D</td>
                    </tr>
                    <tr>
                        <td class="label">Alamat Tetap</td>
                        <td class="blue">8 5 Jln Pju 8/5G Bandar Damansara Perdana Petaling Jaya</td>
                    </tr>
                    <tr>
                        <td class="label">Poskod</td>
                        <td class="blue">47820</td>
                    </tr>
                </table>
            </div>
            <div class="content-right">
                <table>
                    <tr>
                        <td class="label">Alamat Surat Menyurat</td>
                        <td class="blue">No. 225 Jalan 18/23, Taman Sri Serdang, Seri Kembangan</td>
                    </tr>
                    <tr>
                        <td class="label">Poskod</td>
                        <td class="blue">43300</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Family Information Section -->
        <div class="section-title">Maklumat Keluarga</div>
        <div class="content-section">
            <div class="content-left">
                <table>
                    <tr>
                        <td class="label">Taraf Perkahwinan</td>
                        <td class="blue">Berkahwin</td>
                    </tr>
                    <tr>
                        <td class="label">Nama Pasangan</td>
                        <td class="blue">Maisarah bte Zainab</td>
                    </tr>
                    <tr>
                        <td class="label">Tarikh Lahir Pasangan</td>
                        <td class="blue">11/11/1986</td>
                    </tr>
                </table>
            </div>
            <div class="content-right">
                <table>
                    <tr>
                        <td class="label">Anak</td>
                        <td class="blue">Ramlah binti Mohd Sufian</td>
                    </tr>
                    <tr>
                        <td class="label">Tarikh Lahir Anak</td>
                        <td class="blue">12/09/2010</td>
                    </tr>
                    <tr>
                        <td class="label">Keputusan Peperiksaan</td>
                        <td class="blue">UPSR: 4A 1B</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
';

// Load content into Dompdf
$dompdf->loadHtml($html);

// Set paper size and orientation (optional)
$dompdf->setPaper('A4', 'portrait');

// Render the PDF
$dompdf->render();

// Output the PDF to browser
$dompdf->stream("profile.pdf", ["Attachment" => false]);

