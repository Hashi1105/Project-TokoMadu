<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'product_id';

    protected $allowedFields = ['product_id', 'category_id', 'product_name', 'product_price', 'product_sku', 'product_status', 'product_image', 'product_description'];

}
