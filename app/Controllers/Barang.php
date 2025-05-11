<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barang;

    public function __construct()
    {
        $this->barang = new BarangModel();
    }

    public function index()
    {
        $data['barang'] = $this->barang->findAll();
        return view('barang/index', $data);
    }

    public function create()
    {
        return view('barang/create');
    }

    public function store()
    {
        $this->barang->save([
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok' => $this->request->getPost('stok'),
            'satuan' => $this->request->getPost('satuan'),
            'harga' => $this->request->getPost('harga'),
        ]);
        return redirect()->to('/barang');
    }

    public function edit($id)
    {
        $data['barang'] = $this->barang->find($id);
        return view('barang/edit', $data);
    }

    public function update($id)
    {
        $this->barang->update($id, [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok' => $this->request->getPost('stok'),
            'satuan' => $this->request->getPost('satuan'),
            'harga' => $this->request->getPost('harga'),
        ]);
        return redirect()->to('/barang');
    }

    public function delete($id)
    {
        $this->barang->delete($id);
        return redirect()->to('/barang');
    }
}
