<?php

namespace App\Http\Controllers\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='category';
    protected $primaryKey='id';
    public $timestamps=false;
}
