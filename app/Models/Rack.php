<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    
    use HasFactory;
    protected $fillable=['Name'];
    public function stock(){
        return $this->hasMany('App\Models\Stock');
    }
    
}
