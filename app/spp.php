<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    protected $table = 'spp';
    protected $filable = ['id','tahun','nominal'];
    protected $primaryKey = 'id';

    public function siswa()
	{
        return $this->hasMany('App\siswa');
	}
}


