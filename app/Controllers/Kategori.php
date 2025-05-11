<?php

namespace App\Controllers;
use App\Models\KategoriModel;

class Kategori extends BaseController
{
    public function __construct() {
        $this->kategori_model= new KategoriModel();
        
    }
    public function index(): string
    {
        $data = [
            'dataKategori' => $this->kategori_model->findAll()
    ];
        return view('Admin/Menu/MenuKategori', $data);
    }
}
