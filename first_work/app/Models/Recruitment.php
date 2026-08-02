<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Recruitment extends Model{
    protected $table = 'recruitmenttable';
    protected $primaryKey = 'ApplicationId';
    public $timestemps = false;
    protected $fillable = [
        'ApplicationId',
        'Name',
        'Status',
        'Priority',
        'AssignedTo',
    ];
}
