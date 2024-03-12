<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ua',
        'title_pl',
        'title_en',
        'subtitle_ua',
        'subtitle_pl',
        'subtitle_en',
        'description_ua',
        'description_pl',
        'description_en',
        'slug',
        'is_published',
        'publication_date',
    ];
}
