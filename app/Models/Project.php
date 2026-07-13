<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_path',
        'demo_link',
        'github_link',
        'description',
        'tags',
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
