

<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('pasien/tambah'); ?>" class="btn btn-success btn-sm float-right"> Tambah Data</a>
            </div>
            <div class="card-body bg-light text-dark px-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Umur Pasien</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($pasien as $r){ ?>
                    <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $r['namaPasien']; ?></td>
                    <td><?= $r['jenisKelamin']; ?></td>
                    <td><?= $r['umurPasien']; ?></td>
                    <td>
                        <a href="<?= base_url('pasien/edit/'.$r['idPasien']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('pasien/hapus/'.$r['idPasien']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data?')">Hapus</a>
                    </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
                </table>
            </div>
        </div>
</section>