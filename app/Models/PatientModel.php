<?php

namespace App\Models;

use CodeIgniter\Model;

class PatientModel extends Model
{
    protected $table = 'patient';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'address', 'phone'];
}
