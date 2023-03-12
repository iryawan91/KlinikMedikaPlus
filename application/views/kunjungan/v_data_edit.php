

<section class="konten mt-2">
        <div class="card text-white  mx-3">
            <div class="card-header bg-primary ">
                <?= $title; ?>
                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-warning btn-sm float-right"> Kembali</a>
            </div>
            <div class="card-body text-dark">
                <form method="post" action="<?= base_url('kunjungan/update'); ?>" >
                <input type="hidden" name="idBerobat" value="<?=  $edit['idBerobat']; ?>">
                    <div class="form-group">
                        <label>Tanggal Berobat</label>
                        <input type="date" class="form-control" name="tglBerobat" value="<?=  $edit['tanggalBerobat']; ?>" required>
                    </div>

                    
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <select name="pasien" id="" class="form-control">
                            <?php
                            foreach($pasien as $r){
                                if($r['idPasien'] == $edit['idPasien']){
                                    $aktif="selected";
                                }else{
                                    $aktif="";
                                }
                            ?>
                            <option value="<?=  $r['idPasien']; ?>"<?= $aktif; ?>><?=$r['namaPasien']; ?></option> 
                            <?php } ?>
                        </select>
                    </div>
 
                    <div class="form-group">
                        <label>Nama Dokter</label>
                        <select name="dokter" id="" class="form-control">
                            <?php
                            foreach($dokter as $r){
                                if($r['idDokter'] == $edit['idDokter']){
                                    $aktif="selected";
                                }else{
                                    $aktif="";
                                }
                            ?>
                            <option value="<?=  $r['idDokter']; ?>"<?= $aktif; ?>><?=$r['namaDokter']; ?></option> 
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