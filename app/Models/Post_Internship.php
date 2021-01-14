<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Internship extends Model
{
    protected $guarded=[];
    protected $table = 'internships';

    public function company()
    {
        return $this->hasOne(Company::class);
    }
//    public function category()
//    {
//        return $this->hasOne(Category::class);
//    }


}
