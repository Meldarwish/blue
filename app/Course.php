<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = ['name'];
    protected $hidden = ['created_at','updated_at'];

    /**
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function students()
{
    return $this->belongsToMany(Student::class);
}

public function instructors()
{
    return $this->belongsToMany(Instructor::class);
}
}
