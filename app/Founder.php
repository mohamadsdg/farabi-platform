<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    protected $table = 'grades';
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
        return $this->belongsToMany(User::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
