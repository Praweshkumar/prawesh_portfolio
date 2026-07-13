<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'institution', 'degree', 'type', 'location', 'start_date', 'end_date',
        'meta_info', 'description', 'icon_type', 'theme_color', 'coursework'
    ];

    protected $casts = [
        'coursework' => 'array',
    ];
}
