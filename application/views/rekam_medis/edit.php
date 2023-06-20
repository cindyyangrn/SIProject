<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Pengeditan Data Rekam Medis Pasien
            </div>
            <div class="card-body">
                <!-- <?php if(validation_errors () ) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
                <?php endif; ?> -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_rekam_medis">ID Rekam Medis</label>
                        <input type="text" name="id_rekam_medis" class="form-control" id="id_rekam_medis" value="<?= $rekam_medis['id_rekam_medis']?>">
                        <small class="form-text text-danger"> <?= form_error('id_rekam_medis'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="id_anggota">ID Anggota</label>
                        <input type="text" name="id_anggota" class="form-control" id="id_anggota" value="<?= $rekam_medis['id_anggota']?>">
                        <small class="form-text text-danger"> <?= form_error('id_anggota'); ?></small>
                    </div>
                    <div class="form-group2">
                            <label for="tgl_rekam_medis">Tanggal Rekam Medis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tgl_rekam_medis" name="tgl_rekam_medis" value="<?= $rekam_medis['tgl_rekam_medis']?>" placeholder="YYYY-MM-DD">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="gejala">Gejala</label>
                        <input type="text" name="gejala" class="form-control" id="gejala" value="<?= $rekam_medis['gejala']?>">
                    </div>
                    <div class="form-group2">
                            <label for="tindakan">Tindakan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tindakan" name="tindakan" value="<?= $rekam_medis['tindakan']?>">
                            </div>
                        </div>
                    <div class="form-group2">
                        <label for="resep_obat">Resep Obat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="resep_obat" name="resep_obat" value="<?= $rekam_medis['resep_obat']?>">
                        </div>
                    </div>

                        <button type="submit" name="edit" class="btn btn-primary mt-3">Edit</button>
                </form>
            </div>
        </div>

        </div>
    </div>
</div>