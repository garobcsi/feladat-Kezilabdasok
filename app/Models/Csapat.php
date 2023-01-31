<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csapat extends Model
{
    protected $table = 'csapat';
    public $timestamps = false;

    public function jatekosok() {
        return $this->belongsToMany(Jatekos::class,'jatekos');
    }
    // public function jelenlegiJatekosok(

    // )
}
