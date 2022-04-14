<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    protected $fillable = [
		'instructor_name','title','track_name', 'start', 'end'
	];
    public function instructors()
    {
        return $this->belongsToMany(instructor::class);
    }
    use HasFactory;
}
