<?php

namespace App\Models;

use CodeIgniter\Model;

class headerdb  extends Model
{
    protected $table = 'headers';
    protected $primarykey = 'id';
    protected $createdfield = 'dtc';
    protected $protectFields = false;

}
