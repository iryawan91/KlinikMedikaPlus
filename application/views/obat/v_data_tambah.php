

<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('users'); ?>" class="btn btn-warning btn-sm float-right"> Kembali</a>
            </div>
            <div class="card-body text-dark">
                <form method="post" action="<?= base_url('users/insert'); ?>" >
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
</section>