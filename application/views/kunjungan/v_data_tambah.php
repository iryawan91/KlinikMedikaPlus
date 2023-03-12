

<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-warning btn-sm float-right"> Kembali</a>
            </div>
            <div class="card-body text-dark">
                <form method="post" action="<?= base_url('kunjungan/insert'); ?>" >
                    <div class="form-group">
                        <label>Tanggal Berobat</label>
                        <input type="date" class="form-control" name="tglBerobat" required>
                    </div>

                    
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <select name="Pasien" class="form-control">
                            <option value="">-Pilih Pasien-</option>
                            <?php foreach($pasien as $p) { ?>
                            <option value="<?=  $p['idPasien']; ?>"><?=  $p['namaPasien']; ?><?=  $p['namaPasien']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama Dokter</label>
                        <select name="Dokter" class="form-control">
                            <option value="">-Pilih Dokter-</option>
                            <?php foreach($dokter as $d) { ?>
                            <option value="<?=  $d['idDokter']; ?>"><?=  $d['namaDokter']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
</section>