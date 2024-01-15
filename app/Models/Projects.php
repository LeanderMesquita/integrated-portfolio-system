<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'public.projects';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'image',
        'description',
        'avaliable',
        'dtCreation',
        'technologies_project',
        'responsible_agency',
        'current_link',
    ];

    protected $casts = [
        'responsible_agency' => 'json',
        'image' => 'array',
    ];
    
    public function technologies (){
        return $this->belongsToMany(Technologies::class, 'technologies_project', 'project_id', 'technology_id');
    }

}
