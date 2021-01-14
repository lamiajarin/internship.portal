<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jpb_Short_List extends Model
{
    protected $guarded = [];
    protected $table = 'jpb__short__lists';


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function internship()
    {
        return $this->belongsTo(Post_Internship::class,'internship_id','id');
    }
}
