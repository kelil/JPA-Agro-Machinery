<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machinery extends Model
{
    use HasFactory;
    protected $fillable = [
        'tag_en',
        'tag_am',
        'title_en',
        'title_am',
        'desc_en',
        'desc_am',
        'image',
    ];
}
