<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class BarangController extends BaseController

{
    protected $id_barang, $namabarang, $spesifikasi, $lokasi, $kondisi, $jumlahbarang, $sumberdana , $barangmodel;
    public function __construct()
    {
        $this->barangmodel = new BarangModel();
    }
    public function index()
    {
        //menampilkan daftar barang
        $list = $this->barangmodel->findAll();
        $data = [
            'list' => $list
        ];
        //return $this->response->setJSON($list);
        return view('barang/listbarang',$data);
    }
    public function tambah(){
        //menampilkan form tambah
        return view('barang/formtambah');
    }
    public function simpan(){
        $data = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'spesifikasi' => $this->request->getVar('spesifikasi'),
            'lokasi'      => $this->request->getVar('lokasi'),
            'kondisi'     => $this->request->getVar('kondisi'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'sumber_dana' => $this->request->getVar('sumber_dana')
        ];
        $operasi_input = $this->barangmodel->save($data);
        if($operasi_input):
            return \redirect()->to('barang');
        else:
            echo "Gagal ditambah";
        endif;
    }
    public function edit($id = null){
        $barang = $this->barangmodel->where(['id_barang'=>$id])
                    ->first();
        $data = [
            'barang'    => $barang
        ];
        return view('barang/edit',$data);
    }
    public function update(){
        $this->id_barang = $this->request->getVar('id_barang');
        $data = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'lokasi'    => $this->request->getVar('lokasi'),
            'kondisi'   => $this->request->getVar('kondisi'),
            'spesifikasi' => $this->request->getVar('spesifikasi'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'sumber_dana' => $this->request->getVar('sumber_dana')
        ];
        $a = $this->barangmodel->update($this->id_barang,$data);
        if($a){
            return \redirect()->to('barang');
        }else{

        }
    }
    public function delete($id = null){
       
        $hapus = $this->barangmodel
                        ->where(
                            array('id_barang'=>$id)
                        )
                        ->delete();
        if($hapus):
            return \redirect()->to('barang');
           // "echo barang"
        else:

        endif;
    }
}
