<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    use HasFactory;
    //protected $guarded = [];
    protected $table = "gadget";

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}
