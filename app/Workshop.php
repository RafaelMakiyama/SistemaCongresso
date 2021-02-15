<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{


    protected $fillable = [
        'id','name','description', 'period','vacancies', 'workload'
    ];

    public $timestamps = false;
}
