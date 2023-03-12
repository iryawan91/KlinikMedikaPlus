

<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('pasien'); ?>" class="btn btn-warning btn-sm float-right"> Kembali</a>
            </div>
            <div class="card-body text-dark">
                <form method="post" action="<?= base_url('pasien/insert'); ?>" >
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" class="form-control" name="namaPasien" required>
                    </div>

                    <div class="form-group">
                        <label>Umur Pasien</label>
                        <input type="text" class="form-control" name="umurPasien" required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenisKelamin" class="form-control">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
</section>