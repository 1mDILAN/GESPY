<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'phone', 'team_name', 'project_name'];

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_name', 'name');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_name', 'name');
    }
}
