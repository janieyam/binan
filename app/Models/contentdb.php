<?php

namespace App\Models;

use CodeIgniter\Model;

class contentdb  extends Model
{
    protected $table = 'contents';
    protected $primarykey = 'id';
    protected $createdfield = 'dtc';
    protected $protectFields = false;
}
