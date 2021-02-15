<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
        'name', 'birthday', 'cpf', 'tellphone', 'cellphone', 'university',
        'course', 'graduation_level','user_id'
    ];

    public $timestamps = false;

    public function user (){
        return $this->hasOne(User::class, 'user_id');
    }

}
