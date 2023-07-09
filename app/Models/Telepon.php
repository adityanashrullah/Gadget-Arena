<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "telepon";

    public function customer(){
        return $this->hasOne(Customer::class);
    }
}
