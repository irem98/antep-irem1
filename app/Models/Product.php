<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    Protected $table ='Products';
    protected $fillable = ['name','price','photo','description','created_by'];

    //ilişkili olduğu alanlar
    public function User(){
        return $this -> hasMany('App\Models\User','id','created_by');

    }

}
