<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "customer";
    
    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
    
    public function telepon(){
        return $this->hasOne(Telepon::class);
    }
}
