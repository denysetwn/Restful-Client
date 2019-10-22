<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Daftar Menu</h3>
                <?php if (empty($menu)) : ?>
                    <div class="alert alert-danger" role="alert">
                    data Menu tidak ditemukan.
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <?php foreach ($menu as $mn) : ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?= $mn['image'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $mn['nama']; ?></h5>                        
                        <a href="<?= base_url(); ?>menu/detail/<?= $mn['id']; ?>" class="badge badge-primary float-right">detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>