<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = [
        'nilai',
        'predikat',
        'semester',
        'id_mata_pelajaran',
        'id_guru',
        'id_murid',
    ];

    public function murid()
    {
        return $this->belongsTo(Murid::class, 'id_murid');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(Mata_Pelajaran::class, 'id_mata_pelajaran');
    }
}
