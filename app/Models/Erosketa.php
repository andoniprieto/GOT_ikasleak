<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Erosketa extends Model
{
    protected $fillable = [
        'erabiltzailea',
        'ekitaldia_id',
        'sarrera_kopurua',
    ];

    protected $table = 'erosketak';
    public function ekitaldia()
    {
        return $this->belongsTo(Ekitaldia::class);
    }

}
