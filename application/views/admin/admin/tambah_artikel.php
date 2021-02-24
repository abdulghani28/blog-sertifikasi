<div class="container-fluid">
    <?php if ($this->session->flashdata('pesan') !== null) : ?>
        <div class="alert alert-info text-center">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row mt-5 justify-content-around">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">
                    Tambah Artikel
                </div>
                <div class="card-body">
                    <?= form_open_multipart('tambah/artikel') ?>
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input class="form-control" type="text" name="judul" placeholder="Judul Artikel" required>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option>---- PILIH KATEGORI ----</option>
                                    <?php foreach ($kategori as $k) : ?>
                                        <option value="<?= $k->id ?>"><?= $k->nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="foto" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Isi Artikel</label>
                        <textarea name="isi" id="ckeditor" cols="30" rows="10" required></textarea>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-danger btn-lg btn-block">Reset</button>
                        </div>
                        <div class="col-md-6">
                            <button name="1" class="btn btn-success btn-lg btn-block">Publish</button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>