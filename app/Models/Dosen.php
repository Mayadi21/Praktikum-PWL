<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    public $timestamps = false;
    protected $fillable = [];

    public function RuanganDosen() {
        return $this->hasOne(RuanganDosen::class, 'id_dosen');
    }
}