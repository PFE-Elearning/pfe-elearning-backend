<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\User; 
use App\Models\Course;
=======
use App\Models\User;
>>>>>>> 2d4f597ae2f437113f388596e84256dc72eb4727
class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'rating', 'picture'
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
<<<<<<< HEAD
    public function courses(){
        return $this->hasMany(Course::class);
    }
=======
>>>>>>> 2d4f597ae2f437113f388596e84256dc72eb4727
}
