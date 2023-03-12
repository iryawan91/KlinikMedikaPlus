<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
      main > .container {
          padding: 60px 15px 0;
        }

        .footer {
          background-color: #f5f5f5;
        }

        .footer > .container {
          padding-right: 15px;
          padding-left: 15px;
        }

        code {
          font-size: 80%;
        }
    </style>
    <title>Aplikasi Klinik Medika Plus</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="<?= base_url(''); ?>">MEDIKA+ </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url(''); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kunjungan'); ?>">Kunjungan Berobat</a>
        </li>
         

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Data Master
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?= base_url('pasien'); ?>">Data Pasien</a>
          <a class="dropdown-item" href="<?= base_url('dokter'); ?>">Data Dokter</a>
          <a class="dropdown-item" href="<?= base_url('obat'); ?>">Data Obat</a>
          <a class="dropdown-item" href="<?= base_url('users'); ?>">Data Users</a>
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?= base_url('laporan/data_pasien'); ?>">Laporan Pasien</a>
          <a class="dropdown-item" href="<?= base_url('laporan/data_dokter'); ?>">Laporan Dokter</a>
          <a class="dropdown-item" href="<?= base_url('laporan/data_obat'); ?>">Laporan Obat</a>
          <a class="dropdown-item" href="<?= base_url('laporan/data_kunjungan'); ?>">Laporan Kunjungan</a>
        </div>
      </li>

        </ul>
        <span class="navbar-text">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
         
        </span>
    </div>
    </nav>