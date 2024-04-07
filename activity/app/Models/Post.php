<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $dateFormat = 'd, l F Y';
    protected $casts = [
        'status' => 'boolean',
    ];
}