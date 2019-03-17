<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['studentName','classNameId','roll','student_id','section','studentGroup','fatherName','motherName','villageName','postName','thanaName','districtName','occupationName','image','guardianName','guardianVillageName','guardianPostName','guardianThanaName','guardianDistrictName','dateTime','nationality','religionName'];
}

