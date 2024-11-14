<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CagyService extends Model
{
    use HasFactory;
    protected $table = 'cagy_services';
    protected $primaryKey='cagy_id';
    protected $fillable = ['cagy_serv','detail_cagy','status'];
}
