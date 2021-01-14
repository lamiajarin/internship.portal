<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function profile()
    {
        return $this->hasOne(Personal_Details::class);
    }

    public function skill()
    {
        return $this->hasMany(Skill::class, 'user_id', 'id');
    }

    public function education()
    {
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function work_sample()
    {
        return $this->hasMany(Work_Sample::class, 'user_id', 'id');
    }

    public function training()
    {
        return $this->hasMany(Training::class, 'user_id', 'id');
    }

    public function project()
    {
        return $this->hasMany(Project::class, 'user_id', 'id');
    }

    public function post_internship()
    {
        return $this->hasMany(Post_Internship::class, 'user_id', 'id');
    }

    public function manage_internship()
    {
        return $this->hasMany(Post_Internship::class, 'user_id', 'id');
    }

    public function jobShortLists()
    {
        return $this->hasMany(Jpb_Short_List::class, 'user_id', 'id');
    }

    public function empProfile()
    {
        return $this->hasOne(Profile::class);
    }

}
