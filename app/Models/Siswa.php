<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table='tabel_siswa';
    protected $primarykey='nisn';
    protected $incrementing=false;
    protected $keytype='string';
    protected $guarded=[];
}
