<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "transaksi";

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }
    public function gadget(){
        return $this->belongsTo(Gadget::class);
    }
}
