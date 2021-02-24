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
                    Edit Artikel
                </div>
                <div class="card-body">
                    <?= form_open_multipart('edit/artikel/' . $artikel->id) ?>
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input value="<?= $artikel->judul ?>" class="form-control" type="text" name="judul" placeholder="Judul Artikel" required>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option>---- PILIH KATEGORI ----</option>
                                    <?php foreach ($kategori as $k) : ?>
                                        <?php if ($k->id === $artikel->kategori) :
                                            $select = 'selected';
                                        else :
                                            $select = '';
                                        endif; ?>
                                        <option <?= $select ?> value="<?= $k->id ?>"><?= $k->nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <h5>Thumbnail Sekarang</h5>
                            <input type="hidden" name="gambar_sekarang" value="<?= $artikel->gambar ?>">
                            <img class="img-fluid" src="<?= base_url('assets/uploads/thumbnail/' . $artikel->gambar) ?>" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Isi Artikel</label>
                        <textarea name="isi" id="ckeditor" cols="30" rows="10" required><?= $artikel->isi ?></textarea>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-danger btn-lg btn-block">Reset</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-lg btn-block">Edit</button>
                        </div>

                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>