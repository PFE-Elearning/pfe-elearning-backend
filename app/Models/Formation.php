<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;
class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'rating', 'picture'
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
