<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    protected $table = 'startups';
    protected $fillable = [
        'name',
        'start_date',
        'introduction',
        'type',
        'stage',
        'is_mvp_ready',
        'working',
        'similar_startup',
        'is_idea_submitted',
        'company_name',
        'company_rn',
        'market_research',
        'description',
        'team_id',
        'founder_id'
    ];

    public function founder()
    {
        return $this->belongsTo(Founder::class);
    }

    public function team()
    {
        return $this->hasOne(Team::class);
    }

    public function domains()
    {
        return $this->belongsToMany(Domain::class);
    }
}
