<?php $this->extend('layout/layout'); ?>
<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Barang <?=$barang['nama_barang']?></h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?=BASE;?>barang/update">
                    <div class="form-group row">
                        <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-4">
                            <input type="hidden" id="id_barang" class="form-control" name="id_barang" value="<?=$barang['id_barang']?>">
                            <input type="text" id="namaBarang" class="form-control" name="nama_barang" value="<?=$barang['nama_barang']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="spesifikasi" class="col-sm-2 col-form-label">Spesifikasi</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" value="<?=$barang['spesifikasi']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?=$barang['lokasi']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                        <div class="col-sm-4">
                     
                            <select name="kondisi" id="kondisi" class="form-control">
                                <option value="Baik" <?= $barang['kondisi'] === 'Baik' ? 'selected' : "" ; ?>>Baik</option>
                                <option value="Rusak Ringan" <?= $barang['kondisi'] === 'Rusak Ringan' ? 'selected' : "" ; ?>>Rusak Ringan</option>
                                <option value="Rusak Berat" <?= $barang['kondisi'] === 'Rusak Berat' ? 'selected' : "" ; ?>>Rusak Berat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah_barang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" value="<?=$barang['jumlah_barang']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sumber_dana" class="col-sm-2 col-form-label">Sumber Dana</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="sumber_dana" name="sumber_dana" value="<?=$barang['sumber_dana']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>