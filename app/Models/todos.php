<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todos extends Model
{
    protected $table = 'todos';
    protected $fillable = [
        'title',
        'description'
    ];
    use HasFactory;
}
