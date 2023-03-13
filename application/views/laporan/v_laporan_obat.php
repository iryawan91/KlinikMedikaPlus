<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
<body>
    <div class="container">
        <h3>KLINIK MEDIKA PLUS</h3>
        <small>Jalan Raya PKP No. 24 Kelapa Dua Wetan, Ciracas, Jakarta Timur</small>
        <hr>
        <h4>Laporan Data Pasien</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pasien</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($obat as $r) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $r['namaObat']; ?></td>
                <?php $no++; } ?>
            </tbody>
            </table>

            <table width="100%">
                <tr>
                    <td></td>
                    <td>
                        <p>
                            Bandung, <?= date('d-m-Y'); ?>
                            <br>
                            Administrator,
                            <br><br><br><br>
                            __________________
                        </p>
                    </td>
                </tr>
            </table>
    </div>
</body>
</html>