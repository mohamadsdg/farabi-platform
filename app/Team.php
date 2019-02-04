<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $fillable = [
        'name',
        'background',
        'employees_count',
        'introduction',
        'teamwork',
        'description',
        'startup_id',
        'founder_id'
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function startup()
    {
        return $this->belongsTo(Startup::class);
    }

    public function founder()
    {
        return $this->belongsTo(Founder::class);
    }
}
