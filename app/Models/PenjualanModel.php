<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table      = 'transactions';
    protected $primaryKey = 'trx_id';

    protected $allowedFields = ['trx_id', 'product_id', 'trx_price', 'trx_date'];

}
