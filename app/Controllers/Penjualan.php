<?php

namespace App\Controllers;
use App\Models\PenjualanModel;

class Penjualan extends BaseController
{
    public function __construct() {
        $this->Penjualan= new PenjualanModel();
        
    }
    public function index(): string
    {
        $data = ['dataPenjualan' => $this->Penjualan->findAll()];
        return view('Admin/Menu/MenuPenjualan', $data);
    }
}
