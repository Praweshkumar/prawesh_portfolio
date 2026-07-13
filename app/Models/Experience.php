<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'company', 'role', 'type', 'location', 'start_date', 'end_date',
        'is_current', 'description', 'logo_path', 'theme_color', 'technologies'
    ];

    protected $casts = [
        'is_current' => 'boolean',
        'technologies' => 'array',
    ];
}
