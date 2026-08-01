<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Leave extends Model {


    protected $table = 'leavetable';
    protected $primarykey = 'EmployeeId';
    public $timestamps = false;
    protected $fillable = [
        'EmployeeId',
        'Name',
        'Status',
    ];
}
