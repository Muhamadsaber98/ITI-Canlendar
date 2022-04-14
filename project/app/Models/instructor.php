<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    public function sessions()
    {
        return $this->belongsToMany(session::class);
    }
    public function courses()
    {
        return $this->belongsToMany(course::class);
    }
    use HasFactory;
}
