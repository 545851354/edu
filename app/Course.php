<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $fillable = ['course_name','course_price','course_desc','cover_img','profession_id'];
}
