<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'guru_id');
    }

    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }

    public function absensi(){
        return $this->belongsTo(Absensi::class);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
