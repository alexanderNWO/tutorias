<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clasificado extends Model
{
    protected $primaryKey = 'idc';
    protected $fillable=['idc','nombre'];
}
