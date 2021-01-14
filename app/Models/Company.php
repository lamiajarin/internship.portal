<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];
    protected $table = 'companies';

    public function profile()

    {
        return $this->hasOne(Profile::class, 'id','profile_id');
    }

}
