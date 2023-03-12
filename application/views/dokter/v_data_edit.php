

<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('dokter'); ?>" class="btn btn-warning btn-sm float-right"> Kembali</a>
            </div>
            <div class="card-body text-dark">
                <form method="post" action="<?= base_url('dokter/update'); ?>" >
                <input type="hidden"  name="idDokter" value="<?= $r['idDokter']; ?>">    
                  
                    <div class="form-group">
                        <label>Nama Dokter</label>
                        <input type="text" class="form-control" name="namaDokter" value="<?= $r['namaDokter']; ?>" required>
                    </div>

                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
</section>