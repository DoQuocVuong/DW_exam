<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Students extends Model
{
    protected $table = 'student';

    protected $fillable = [
        "student_name",
        "student_email",
        "student_phone",
        "feedback"

    ];
}
