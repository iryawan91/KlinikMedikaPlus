

<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('users/tambah'); ?>" class="btn btn-success btn-sm float-right"> Tambah Data</a>
            </div>
            <div class="card-body bg-light text-dark px-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($users as $r){ ?>
                    <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $r['username']; ?></td>
                    <td><?= $r['nama']; ?></td>
                    <td>
                        <a href="<?= base_url('users/edit/'.$r['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('users/hapus/'.$r['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data?')">Hapus</a>
                    </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
                </table>
            </div>
        </div>
</section>