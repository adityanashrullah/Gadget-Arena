<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "pegawai";

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}
