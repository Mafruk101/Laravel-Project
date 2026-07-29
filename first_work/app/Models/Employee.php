<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employeetable';

    protected $primaryKey = 'EmployeeId';

    public $timestamps = false;

    protected $fillable = [
        'Role',
        'Department',
        'Status',
        'Location',
        'Action',

    ];
}
