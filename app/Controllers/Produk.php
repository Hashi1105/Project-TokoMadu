<?php

namespace App\Controllers;
use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function __construct() {
        $this->produk= new ProdukModel();
        
    }
    public function index(): string
    {
        $data = ['dataProduk' => $this->produk->findAll()];
        return view('Admin/Menu/MenuProduk', $data);
    }
}
