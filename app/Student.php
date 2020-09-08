<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['name','image'];
    protected $hidden = ['created_at','updated_at'];


    public function instructors()
    {
        return $this->belongsToMany(Instructor::class);
    }
    
    public function courses()
    {
        return $this->belongsToMany('App\Course','course_student','course_id','student_id','id','id');
    }


}
