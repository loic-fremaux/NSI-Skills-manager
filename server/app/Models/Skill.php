<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'displayed_name', 'score'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'skills_pivot', 'skill_id', 'user_id');
    }
}
