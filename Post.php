<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Thêm dòng này
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // Thêm dòng này

    protected $fillable = ['title', 'content'];
}
