<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplyCandidate extends Model
{
    protected $guarded = [];
    protected $table = 'apply_candidates';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function internship()
    {
        return $this->belongsTo(Post_Internship::class, 'internship_id', 'id');
    }

    public function employee()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'id');
    }
    public function action()
    {
        return $this->belongsTo(TakeAction::class, 'take_action_id', 'id');
    }


}
