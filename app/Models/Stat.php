<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stat extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'value', 'color'
    ];
}
