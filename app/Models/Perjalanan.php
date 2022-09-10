<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    use HasFactory;

    protected $table = 'perjalanan';
    protected $fillable = ['nik','tanggal','waktu','lokasi','suhu'];

    public function perjalanan()
    {
     return $this->hasMany('App\Perjalanan');
    }
}

