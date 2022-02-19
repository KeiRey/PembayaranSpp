<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['id','nisn','nis','nama','kelas_id','alamat','no_telp','id_spp'];
    protected $primaryKey = 'id';

    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }

    public function spp()
    {
        return $this->belongsTo('App\spp');
    }
}
