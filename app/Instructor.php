<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'instructors';

    protected $fillable = ['name'];
    protected $hidden = ['created_at','updated_at'];


    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }




}
