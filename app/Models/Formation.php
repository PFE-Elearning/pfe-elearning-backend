<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\User;
=======
use App\Models\User; 
use App\Models\Course;
>>>>>>> 8acd756732ab9152b9b75d0e76ad125782c406fd
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
=======
    public function courses(){
        return $this->hasMany(Course::class);
    }
>>>>>>> 8acd756732ab9152b9b75d0e76ad125782c406fd
}
