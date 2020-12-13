<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    Protected $table ='Blogs';
    protected $fillable = ['name','photo','description'];
}
