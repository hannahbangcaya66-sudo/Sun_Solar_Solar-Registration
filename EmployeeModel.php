<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'fname',
        'lname',
        'mname',
        'birthdate',
        'gender',
        'email',
        'phone',
        'address',
        'username',
        'password',
        'department'
    ];
}
