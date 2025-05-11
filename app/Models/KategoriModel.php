<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table      = 'categories';
    protected $primaryKey = 'category_id';

    protected $allowedFields = ['category_id', 'category_name','category_status'];

}
