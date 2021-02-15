<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkshopClasses extends Model

{
    protected $fillable = [
        'id', 'student_id', 'workshop_id'
    ];

    public $timestamps = false;
    protected $table = 'workshopclasses';
    public function Student(){
        return $this->hasMany(Student::class);
    }

    public function Workshop(){
        return $this->hasMany(Workshop::class);
    }



}
