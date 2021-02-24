<div class="container-fluid">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Hasil Pencarian dari <?= $_GET['cari']; ?></h2>
                </div>
                <div class="card-body">
                    <?php foreach ($artikel as $a) : ?>
                        <a class="text-dark text-decoration-none" href="<?= base_url('artikel/' . $a->id) ?>">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img class="img-fluid" src="<?= base_url('assets/uploads/thumbnail/' . $a->gambar) ?>">
                                        </div>
                                        <div class="col-md-8 ">
                                            <h5><?= $a->judul; ?></h5>
                                            <p><?= word_limiter($a->isi, 25); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>