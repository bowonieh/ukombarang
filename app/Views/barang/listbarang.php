<?php $this->extend('layout/layout'); ?>
<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
               <a href="<?=BASE;?>barang/tambah"> <btn class="btn btn-primary">Tambah Barang</btn></a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>
                                NO
                            </th>
                            <th>
                                Nama barang
                            </th>
                            <th>
                                Kondisi
                            </th>
                            <th>
                                Jumlah
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        foreach($list as $barang):?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $barang['nama_barang']?></td>
                                <td><?= $barang['kondisi']?></td>
                                <td><?= $barang['jumlah_barang']?></td>
                                <td><btn class="btn btn-primary">Detil</btn> 
                                <a href="<?=BASE;?>barang/edit/<?= $barang['id_barang']?>"><btn class="btn btn-secondary">Edit</btn></a>
                               <a href="<?=BASE;?>barang/hapus/<?= $barang['id_barang']?>"> <btn class="btn btn-danger">Hapus</btn></a>
                            </td>
                        </tr>
                        <?php     
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>