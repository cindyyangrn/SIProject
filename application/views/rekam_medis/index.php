<div class="container">
    <?php if( $this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <strong>Berhasil </strong> <?= $this->session->flashdata('flash');?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

<!-- tomobl tambah rekam medis -->
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <a class="btn btn-primary">Tambah Rekam Medis</a>
            href="<?= base_url();?>rekam_medis/tambah"
        </div>
    </div> -->

<!-- tombol cari rekam medis -->
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari id rekam medis atau id anggota..." name='keyword' >
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->

 <div class="row mt-3">
    <div class="col-md-6">
        <h3>Data Rekam Medis Pasien</h3>
            <div>   
                <?php if(empty($rekam_medis)) : ?>
                    </div>
                        <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan.
                    </div>
                <?php endif; ?>
            </div>
        <ul class="list-group row mb-3">
            <?php foreach ($rekam_medis as $rk) : ?>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" align="center">ID Rekam Medis</th>
                        <th scope="col" align="center">ID Anggota</th>
                        <th scope="col" align="center">Ket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td> <?= $rk ['id_rekam_medis'] ?> </td>
                        <td> <?= $rk ['id_anggota'] ?> </td>
                        <td>
                            <a href="<?= base_url();?>rekam_medis/hapus/<?=$rk['id_rekam_medis']?>" class="badge badge-danger float-center" onclick="return confirm('Anda yakin ingin menghapus data ini?');">hapus</a>
                            <!-- <a href="<?= base_url();?> rekam_medis/edit/<?=$rk['id_rekam_medis']?>"  class="badge badge-success float-center">edit</a> -->
                            <a href="<?= base_url();?>rekam_medis/detail/<?=$rk['id_rekam_medis']?>" class="badge badge-primary float-center">detail</a>
                        </td>
                    </tbody>
                    </table>
            <?php endforeach; ?>
        </ul>
    </div>
 </div>

</div>