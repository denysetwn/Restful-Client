<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Menu
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $menu['kategori']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $menu['nama']; ?></h6>
                    <p class="card-text"><?= $menu['deskripsi']; ?></p>
                    <p class="card-text"><?= $menu['harga']; ?></p>
                    <a href="<?= base_url(); ?>menu" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>