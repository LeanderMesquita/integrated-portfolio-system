<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Technologies extends Model
{
    use HasFactory;
    
    protected $table = 'public.technologies';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'icon',
        'technologies_project',
    ];

    public function projects(){
        return $this->belongsToMany(Projects::class, 'technologies_project', 'technology_id', 'project_id');
    }
}
