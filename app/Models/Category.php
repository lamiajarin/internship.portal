<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];
    protected $table='categories';


    public function internship_post()
    {
        return $this->hasMany(Post_Internship::class);
    }
}
