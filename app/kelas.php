<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable =['id','kelas','kompetensi_keahlian'];
    protected $primaryKey = 'id';

    public function siswa()
	{
        return $this->hasMany('App\siswa');
	}

}
