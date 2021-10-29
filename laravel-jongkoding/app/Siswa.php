<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table ='siswa';
    protected $primaryKey ='nis';
    
    // untuk field primary
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
}
