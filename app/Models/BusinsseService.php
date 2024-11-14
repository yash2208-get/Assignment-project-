<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinsseService extends Model
{
    use HasFactory;
    protected $table = 'businsse_services';
    protected $primaryKey='ser_id';
    protected $fillable = ['servic_name','servic_details','service_img','cagy_id','price','status'];
}