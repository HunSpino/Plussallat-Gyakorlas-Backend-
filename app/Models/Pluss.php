<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pluss extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    protected $visible = ['id','name'];

}
