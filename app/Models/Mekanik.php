<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mekanik extends Model
{
    use HasFactory;
    public function servis()
    {
        return $this->belongsTo(Servis::class);
    }
    public function layanans()
    {
        return $this->belongsTo(Layanan::class);
    }

}
