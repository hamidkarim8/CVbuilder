<?php 

require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

//dummy data

$photo_path = 'https://www.allprodad.com/wp-content/uploads/2021/03/05-12-21-happy-people.jpg';
$greet = "Encik";
$name = "Mohd Sufian Bin Mohd Tarmizi";
$position = "Pegawai Teknologi Maklumat";
$main_email = "sufian@water.gov.my";
$personal_email = "sufian@gmail.com";
$phone_number = "013-1234567";
$ic_number = "893398-12-1234";
$old_ic_number = "893398-12-1234";
$birthdate = "11/10/1988";
$birthplace = "Hospital Kajang";
$gender = "Lelaki";
$race = "Melayu";
$religion = "Islam";
$blood_type = "AB+";
$office_phone = "012932834375";
$mobile_phone = "012932834375";
$fax_number = "012932834375";
$driving_license = "B, D";
$permanent_address = "Jln. Pju 8/5G Bandar Damansara Perdana Petaling Jaya";
$city = "Petaling Jaya";
$postcode = "47820";
$state = "Selangor";
$mailing_address = "No.225 Jalan 18/23, Taman Sri Serdang";
$mailing_city = "Seri Kembangan";
$mailing_postcode = "43300";
$mailing_state = "Selangor";


$marital_status = "Berkahwin";
$spouse_name = "Maisarah Bte Zainab";
$spouse_ic = "893398-12-1234";
$spouse_birthdate = "11/11/1986";
$spouse_state = "Selangor";
$spouse_job = "Kerani";
$spouse_employer = "Selangor";
$spouse_employer_address = "47-2, JLN Usj 9/5p Taman Seafield Jaya, 47620, Petaling Jaya, Selangor";
$child_name = "Ramlah binti Mohd Sufian";
$child_birthdate = "12/23/2001";
$child_status = "Anak Kandung";
$child_exam_result = "UPSR 4A 1B";


$html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <style>
      body {
        background-color: #ccc;
        margin: 0 auto;
        font-family: "source_sans_proregular", sans-serif;
      }

      @font-face {
        font-family: "source_sans_proregular";
        src: local("Source Sans Pro"),
          url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf")
            format("truetype");
        font-weight: normal;
        font-style: normal;
      }

      page {
        background-image: url("http://localhost:8089/PDFtemplate/bg-pdf.jpeg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        position: relative;
      }

      page[size="A4"] {
        width: 21cm;
        height: 29.7cm;
      }

      .parent {
        margin: 0 0.5cm;
        height: 5cm;
        width: 20cm;
        border-collapse: collapse;
      }

      .header td,
      .contact td,
      .photo td {
        padding: 0.3cm;
      }

      .photo {
        width: 5cm;
      }

      .contact p {
        font-size: 12pt;
      }
      .contact small {
        font-size: 12pt;
        color: #555;
        font-weight: 300;
        margin-left: 0;
      }
      .photo > img {
        width: 5cm;
        height: 5cm;
        object-fit: cover;
        border-radius: 50%; 
        border: 6px solid #ffffff; 
        box-shadow: 0 4px 8px rgb(255, 255, 255); 
      }

      .badge {
        display: inline-block;
        padding: 5px 10px;
        background-color: gray;
        color: white;
        border-radius: 12px;
    }

      .content-1 {
        margin-top: 0.5cm;
      }

      .avoid-break {
        page-break-after: avoid;
        page-break-before: avoid;
      }

      .content-1,
      .content-2 {
        display: table;
        margin-left: 0.9cm;
      }

      .content-1 > tr > td {
        padding: 0 0.2cm;
      }

      table.content-1 > tbody > tr > td > h2 {
        color: rgb(46, 46, 255);
        margin: 0.1cm 0;
      }

      table.content-1 > tbody > tr:nth-child(1) > td:nth-child(1),
      table.content-2 > tbody > tr:nth-child(1) > td {
        width: 7.7cm;
      }

      table.content-2 > tbody > tr:nth-child(1) > td:nth-child(2) {
        width: 9cm;
      }

      .item {
        padding-left: 0.8rem;
      }

      .bullet {
        margin-left: -0.5rem;
      }

      .bullet:before {
          content: "";
          display: inline-block;
          width: 8px;
          height: 8px;
          background-color: #019fce;
          clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
          margin-right: 0.3rem;
          transform: rotate(45deg);
      }

      p {
        margin-block: 0.1cm;
        font-size: 8pt;
      }

      small {
        font-size: 8pt;
        color: #555;
        font-weight: 300;
        margin-left: 0.3rem;
      }

      .photo > img {
        width: 5cm;
        height: 5cm;
        object-fit: cover;
        border-radius: 50%;
      }

      .w-100 {
        width: 100%;
      }

      .line {
        border-top: 1px solid gray;
        margin: 0.2cm 0;
      }

      table.content-1 > tbody > tr:nth-child(1) > td:nth-child(2),
      table.content-2 > tbody > tr:nth-child(1) > td:nth-child(2) {
        padding-left: 0.5cm;
      }

      .header-container {
          display: inline-block;
          text-align: center;
      }

      h1 {
          font-size: 24pt;
          margin: 0.1cm 0;
      }

      hr {
          border: 3px solid #019fce;
          border-radius: 5px;
          width: 100%;
          margin: 0;
      }

      h2 {
        font-size: 16pt;
        margin: 0.1cm 0;
      }

      h3 {
        font-size: 11pt;
      }

      h4 {
        font-size: 12pt;
      }

      h5 {
        font-size: 8pt;
      }

      table {
        border-collapse: collapse;
      }

      tr td {
        page-break-inside: avoid;
        white-space: nowrap;
      }
      .page:last-child {
        page-break-after: unset;
      }

      @page {
        size: a4 portrait;
        margin: 0;
      }

      .fixed-right-table {
        position: absolute;
        width: 50%;
        padding: 10px;
      }

      .fixed-right-table table {
        width: 100%;
      }

      .fixed-right-table .item {
        margin-bottom: 10px;
      }

    </style>
  </head>

  <body style="margin-bottom: -20px">
    <page size="A4">
      <table class="parent">
        <tr class="header">
          <td colspan="3">
            <h3 class="title">'. $greet .'</h3>
            <div class="header-container">
                <h1>'. $name .'</h1>
                <hr>
            </div>
            <h4>'. $position .'</h4>
          </td>
          <td class="photo" rowspan="3">
            <img
              src="'. $photo_path .'"
              alt="Photo"
            />
          </td>
        </tr>
        <tr class="contact avoid-break">
          <td>
            <p>Email Utama</p>
            <small>'. $main_email .'</small>
          </td>
          <td>
            <p>Email Peribadi</p>
            <small>'. $personal_email .'</small>
          </td>
          <td>
            <p>No Telefon</p>
            <small>'. $phone_number .'</small>
          </td>
        </tr>
      </table>
      <table class="content-1 avoid-break">
        <tr>
          <td>
            <h2>Butiran Peribadi</h2>
          </td>
          <td>
            <h2>Maklumat Keluarga</h2>
          </td>
        </tr>
      </table>
      <table class="content-2">
        <tr>
          <td>
            <table>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">No. Kad Pengenalan</p>
                    <small>'. $ic_number .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">No. Kad Pengenalan Lama</p>
                    <small>'. $old_ic_number .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Tarikh Lahir</p>
                    <small>'. $birthdate .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Tempat Lahir</p>
                    <small>'. $birthplace .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Jantina</p>
                    <small>'. $gender .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Bangsa</p>
                    <small>'. $race .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Agama</p>
                    <small>'. $religion .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Jenis Darah</p>
                    <small>'. $blood_type .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">No Telefon (Pejabat)</p>
                    <small>'. $office_phone .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Telefon Bimbit</p>
                    <small>'. $mobile_phone .'</small>
                  </div>
                </td>

                <td>
                  <div class="item">
                    <p class="bullet">No Faksimili</p>
                    <small>'. $fax_number .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td colspan="3">
                  <div class="item">
                    <p class="bullet">Lesen Memandu</p>
                    <small>'. $driving_license .'</small>
                  </div>
                </td>
              </tr>
            </table>
            <table class="line w-100">
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Alamat Tetap</p>
                    <small>'. $permanent_address .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Bandar</p>
                    <small>'. $city .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Poskod</p>
                    <small>'. $postcode .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Negeri</p>
                    <small>'. $state .'</small>
                  </div>
                </td>
              </tr>
            </table>
            <table class="line w-100">
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Alamat Surat Menyurat</p>
                    <small>'. $mailing_address .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Bandar</p>
                    <small>'. $mailing_city .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Poskod</p>
                    <small>'. $mailing_postcode .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Negeri</p>
                    <small>'. $mailing_state .'</small>
                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td style="vertical-align: top">
          <div class="fixed-right-table">

            <table>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Taraf Perkahwinan</p>
                    <small>'. $marital_status .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Nama Pasangan</p>
                    <small>'. $spouse_name .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">No. Kad Pengenalan Pasangan</p>
                    <small>'. $spouse_ic .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Tarikh Lahir Pasangan</p>
                    <small>'. $spouse_birthdate .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Negeri Asal Pasangan</p>
                    <small>'. $spouse_state .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Pekerjaan Pasangan</p>
                    <small>'. $spouse_job .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Majikan Pasangan</p>
                    <small>'. $spouse_employer .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Alamat Majikan Pasangan</p>
                    <small>'. $spouse_employer_address .'</small>
                  </div>
                </td>
              </tr>
            </table>
            <table class="line w-100">
              <tr>
                <td colspan="4">
                    <p>ANAK</p>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Nama</p>
                    <small>'. $child_name .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Tarikh Lahir</p>
                    <small>'. $child_birthdate .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Status</p>
                    <small>'. $child_status .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Keputusan Peperiksaan</p>
                    <small class="badge">'. $child_exam_result .'</small>
                  </div>
                </td>
              </tr>
            </table>
            </div>
          </td>
        </tr>
      </table>
    </page>

    
    <page size="A4">
      <table class="parent">
      </table>
      <table class="content-1 avoid-break" style="margin-top: 25%;">
        <tr>
          <td>
            <h2>Butiran Peribadi</h2>
          </td>
          <td>
            <h2>Maklumat Keluarga</h2>
          </td>
        </tr>
      </table>
      <table class="content-2">
        <tr>
          <td>
            <table>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">No. Kad Pengenalan</p>
                    <small>'. $ic_number .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">No. Kad Pengenalan Lama</p>
                    <small>'. $old_ic_number .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Tarikh Lahir</p>
                    <small>'. $birthdate .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Tempat Lahir</p>
                    <small>'. $birthplace .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Jantina</p>
                    <small>'. $gender .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Bangsa</p>
                    <small>'. $race .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Agama</p>
                    <small>'. $religion .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Jenis Darah</p>
                    <small>'. $blood_type .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">No Telefon (Pejabat)</p>
                    <small>'. $office_phone .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Telefon Bimbit</p>
                    <small>'. $mobile_phone .'</small>
                  </div>
                </td>

                <td>
                  <div class="item">
                    <p class="bullet">No Faksimili</p>
                    <small>'. $fax_number .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td colspan="3">
                  <div class="item">
                    <p class="bullet">Lesen Memandu</p>
                    <small>'. $driving_license .'</small>
                  </div>
                </td>
              </tr>
            </table>
            <table class="line w-100">
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Alamat Tetap</p>
                    <small>'. $permanent_address .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Bandar</p>
                    <small>'. $city .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Poskod</p>
                    <small>'. $postcode .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Negeri</p>
                    <small>'. $state .'</small>
                  </div>
                </td>
              </tr>
            </table>
            <table class="line w-100">
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Alamat Surat Menyurat</p>
                    <small>'. $mailing_address .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Bandar</p>
                    <small>'. $mailing_city .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Poskod</p>
                    <small>'. $mailing_postcode .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Negeri</p>
                    <small>'. $mailing_state .'</small>
                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td style="vertical-align: top">
          
          <div class="fixed-right-table">

            <table>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Taraf Perkahwinan</p>
                    <small>'. $marital_status .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Nama Pasangan</p>
                    <small>'. $spouse_name .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">No. Kad Pengenalan Pasangan</p>
                    <small>'. $spouse_ic .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Tarikh Lahir Pasangan</p>
                    <small>'. $spouse_birthdate .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Negeri Asal Pasangan</p>
                    <small>'. $spouse_state .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Pekerjaan Pasangan</p>
                    <small>'. $spouse_job .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Majikan Pasangan</p>
                    <small>'. $spouse_employer .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Alamat Majikan Pasangan</p>
                    <small>'. $spouse_employer_address .'</small>
                  </div>
                </td>
              </tr>
            </table>
            <table class="line w-100">
              <tr>
                <td colspan="4">
                    <p>ANAK</p>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Nama</p>
                    <small>'. $child_name .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Tarikh Lahir</p>
                    <small>'. $child_birthdate .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Status</p>
                    <small>'. $child_status .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Keputusan Peperiksaan</p>
                    <small class="badge">'. $child_exam_result .'</small>
                  </div>
                </td>
              </tr>
            </table>
            </div>
          </td>
        </tr>
      </table>
    </page>


    <page size="A4">
      <table class="parent">
      </table>
      <table class="content-1 avoid-break" style="margin-top: 25%;">
        <tr>
          <td>
            <h2>Butiran Peribadi</h2>
          </td>
          <td>
            <h2>Maklumat Keluarga</h2>
          </td>
        </tr>
      </table>
      <table class="content-2">
        <tr>
          <td>
            <table>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">No. Kad Pengenalan</p>
                    <small>'. $ic_number .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">No. Kad Pengenalan Lama</p>
                    <small>'. $old_ic_number .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Tarikh Lahir</p>
                    <small>'. $birthdate .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Tempat Lahir</p>
                    <small>'. $birthplace .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Jantina</p>
                    <small>'. $gender .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Bangsa</p>
                    <small>'. $race .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Agama</p>
                    <small>'. $religion .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Jenis Darah</p>
                    <small>'. $blood_type .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">No Telefon (Pejabat)</p>
                    <small>'. $office_phone .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Telefon Bimbit</p>
                    <small>'. $mobile_phone .'</small>
                  </div>
                </td>

                <td>
                  <div class="item">
                    <p class="bullet">No Faksimili</p>
                    <small>'. $fax_number .'</small>
                  </div>
                </td>
              </tr>

              <tr>
                <td colspan="3">
                  <div class="item">
                    <p class="bullet">Lesen Memandu</p>
                    <small>'. $driving_license .'</small>
                  </div>
                </td>
              </tr>
            </table>
            <table class="line w-100">
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Alamat Tetap</p>
                    <small>'. $permanent_address .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Bandar</p>
                    <small>'. $city .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Poskod</p>
                    <small>'. $postcode .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Negeri</p>
                    <small>'. $state .'</small>
                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td style="vertical-align: top">
          
          <div class="fixed-right-table">

            <table>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Taraf Perkahwinan</p>
                    <small>'. $marital_status .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Nama Pasangan</p>
                    <small>'. $spouse_name .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">No. Kad Pengenalan Pasangan</p>
                    <small>'. $spouse_ic .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Tarikh Lahir Pasangan</p>
                    <small>'. $spouse_birthdate .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Negeri Asal Pasangan</p>
                    <small>'. $spouse_state .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Pekerjaan Pasangan</p>
                    <small>'. $spouse_job .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Majikan Pasangan</p>
                    <small>'. $spouse_employer .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Alamat Majikan Pasangan</p>
                    <small>'. $spouse_employer_address .'</small>
                  </div>
                </td>
              </tr>
            </table>
            <table class="line w-100">
              <tr>
                <td colspan="4">
                    <p>ANAK</p>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Nama</p>
                    <small>'. $child_name .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="item">
                    <p class="bullet">Tarikh Lahir</p>
                    <small>'. $child_birthdate .'</small>
                  </div>
                </td>
                <td>
                  <div class="item">
                    <p class="bullet">Status</p>
                    <small>'. $child_status .'</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div class="item">
                    <p class="bullet">Keputusan Peperiksaan</p>
                    <small class="badge">'. $child_exam_result .'</small>
                  </div>
                </td>
              </tr>
            </table>
            </div>
          </td>
        </tr>
      </table>
    </page>
  </body>
</html>';


$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

$dompdf->loadHTML($html);
$dompdf->setPaper('A4','Portrait');

$dompdf->render();

file_put_contents('cv.pdf',$dompdf->output());

$dompdf->stream('cv',array('Attachment'=>0));


?>