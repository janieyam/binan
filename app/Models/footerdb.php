<?php

namespace App\Models;

use CodeIgniter\Model;

class footerdb  extends Model
{
    protected $table = 'footer';
    protected $primarykey = 'id';
    protected $createdfield = 'dtc';
    protected $protectFields = false;
}
