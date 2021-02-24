<div class="row justify-content-center mt-4">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <center>
                    <img src="<?= base_url('assets/uploads/thumbnail/' . $isi->gambar) ?>" class="img-fluid">
                </center>
                <br><br>
                <hr>
                <h1 class="text-center"><?= $isi->judul ?></h1>
                <hr>
                <div class="p-4">
                    <?= $isi->isi; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="row justify-content-center">
    <div class="col-md-9">
        <a class="btn btn-block btn-info" href="<?= base_url() ?>">Kembali</a>
    </div>
</div>
<br><br>