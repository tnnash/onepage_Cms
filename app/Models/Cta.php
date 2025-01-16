<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cta extends Model
{
    protected $fillable = ['title', 'description', 'button_text', 'button_link'];
}
