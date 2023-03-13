<section class="konten mt-2">
        <div class="container-fluid">
            <div class="row">

            <div class="col-md-6 mt-3">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        Biodata Pasien
                    <a href="<?= base_url('kunjungan'); ?>" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
                    <div class="card body">
                        <table class="table table-sm">
                            <tr>
                                <th>Nama Pasien</th>
                                <td>:</td>
                                <td><?= $d['namaPasien']; ?></td>
                            </tr>

                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td><?= $d['jenisKelamin']; ?></td>
                            </tr>

                            <tr>
                                <th>Umur</th>
                                <td>:</td>
                                <td><?= $d['umurPasien']; ?> Tahun</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card border-info mt-3">
                    <div class="card-header bg-info text-white">
                        Riwayat Berobat
                    </div>
                    <div class="card body">
                    <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tgl. Berobat</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Diagnosa</th>
                    <th scope="col">Penatalaksana</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($riwayat as $r){ ?>
                    <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $r['tanggalBerobat']; ?></td>
                    <td><?= $r['keluhanPasien']; ?></td>
                    <td><?= $r['hasilDiagnosa']; ?></td>
                    <td><?= $r['penataLaksana']; ?></td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
                </table>
            </div>
                   
                </div>
            </div>


            <div class="col-md-6 mt-3">
                <div class="card border-warning">
                    <div class="card-header bg-warning text-white">
                        Catatan Rekam Medis
                    </div>
                    <div class="card body">
                        <div class="container-fluid">
                        <form action="<?= base_url('kunjungan/insert_rekam'); ?>" method="post">
                            <input type="hidden" name="id" value="<?= $d['idBerobat']; ?>">
                            <div class="form-group">
                                <label for="">Keluahan</label>
                                <textarea name="keluhan" class="form-control" required><?= $d['keluhanPasien']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Diagnosa</label>
                                <textarea name="diagnosa" class="form-control" required><?= $d['hasilDiagnosa']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Penatalaksana</label>
                                <select name="penatalaksana" class="form-control" required>
                                    <option value="<?= $d['penataLaksana']; ?>"><?= $d['penataLaksana']; ?></option>
                                    <option value="Rawat Inap">Rawat Inap</option>
                                    <option value="Rawat Jalan">Rawat Jalan</option>
                                    <option value="Rujuk">Rujuk</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-warning btn-sm mb-3">Simpan Rekam</button>
                        </form>
                        </div>
                        
                    </div>
                </div>

                <div class="card border-success mt-3">
                    <div class="card-header bg-success text-white">
                        Resep Obat
                    </div>
                    <div class="card body">
                        <div class="container-fluid">
                        <form action="<?= base_url('kunjungan/insert_resep'); ?>" method="post">
                            <input type="hidden" name="id" value="<?= $d['idBerobat']; ?>">
                            <div class="form-group d-inline-block">
                                <label for="">Obat</label>
                                <select name="obat" class="form-control" required>
                                    <?php foreach($obat as $r) { ?>
                                            <option value="<?= $r['idObat']; ?>"><?= $r['namaObat']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success ">Tambah Obat</button>
                            </form> 

                            <table class="tabel tabel-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Obat</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($resep as $r) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $r['namaObat']; ?></td>
                                            <td>
                                                <a href="<?= base_url('kunjungan/hapus_resep/'.$r['idResep'].'/'.$r['idBerobat']); ?>" class="text-danger">X</a>
                                            </td>
                                        </tr>
                                    <?php $no++; } ?>

                                </tbody>
                            </table>
                        </div>
                            
                    </div>
                </div>
            </div>


            </div>
        </div>
</section>