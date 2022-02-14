<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable=['Name','Quantity','rackNo','stockInDate','stockOutDate'];
    public function rack(){   
        return $this->belongsTo('App\Models\Rack');
    }

}
