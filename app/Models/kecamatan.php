<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;
    protected $table = 'tbl_kecamatan';
    protected $fillable = [
        'kec_nama'
    ];
    protected $primaryKey = 'kec_kode';
    public $incrementing = false;
    protected $keyType = 'string';
}
