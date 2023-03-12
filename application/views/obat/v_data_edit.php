

<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('obat'); ?>" class="btn btn-warning btn-sm float-right"> Kembali</a>
            </div>
            <div class="card-body text-dark">
                <form method="post" action="<?= base_url('obat/update'); ?>" >
                <input type="hidden"  name="idObat" value="<?= $r['idObat']; ?>">    
                  
                    <div class="form-group">
                        <label>Nama Obat</label>
                        <input type="text" class="form-control" name="namaObat" value="<?= $r['namaObat']; ?>" required>
                    </div>

                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
</section>