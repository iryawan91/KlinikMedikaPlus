<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('dokter/tambah'); ?>" class="btn btn-success btn-sm float-right"> Tambah Data</a>
            </div>
            <div class="card-body bg-light text-dark px-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($dokter as $r){ ?>
                    <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $r['namaDokter']; ?></td>
                    <td>
                        <a href="<?= base_url('dokter/edit/'.$r['idDokter']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('dokter/hapus/'.$r['idDokter']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data?')">Hapus</a>
                    </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
                </table>
            </div>
        </div>
</section>