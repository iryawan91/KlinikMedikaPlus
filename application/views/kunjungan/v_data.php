<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('kunjungan/tambah'); ?>" class="btn btn-success btn-sm float-right">Pendaftaran Baru</a>
            </div>
            <div class="card-body bg-light text-dark px-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Dokter</th>
                    <th scope="col">Rekam Medis</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($kunjungan as $r){ ?>
                    <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $r['tanggalBerobat']; ?></td>
                    <td><?= $r['namaPasien']; ?></td>
                    <td><?= $r['umurPasien']; ?></td>
                    <td><?= $r['namaDokter']; ?></td>
                    <td><a href="<?= base_url('kunjungan/rekam/'.$r['idBerobat']); ?>" class="btn btn-primary btn-sm">Rekam</a>
                        </td> 
                    <td>
                        <a href="<?= base_url('kunjungan/edit/'.$r['idBerobat']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('kunjungan/hapus/'.$r['idBerobat']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data?')">Hapus</a>
                    </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
                </table>
            </div>
        </div>
</section>