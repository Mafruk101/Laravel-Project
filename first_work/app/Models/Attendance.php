<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendancetable';

    protected $primaryKey = 'EmployeeId';

    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Date',
        'Present',
        'Absent',
        'Action',

    ];
}
