<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function serviss()
    {
        return $this->hasOne(Servis::class,'id','servis_id');
    }
}
