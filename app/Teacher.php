<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
 protected $fillable=['name','address','contuctNumber','emailAddress','level1','level2','level3',
 'level4','nidNumber','indexNumber','dateTime','training','image'];
}
