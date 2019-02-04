<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    protected $table = 'founders';
    protected $fillable = [
        'first_name',
        'last_name',
        'grade_id',
        'university_id',
        'major',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function startup()
    {
        return $this->hasOne(Startup::class);
    }

    public function team()
    {
        return $this->hasOne(Team::class);
    }
}
