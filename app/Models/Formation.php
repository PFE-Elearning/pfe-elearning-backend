<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'rating', 'picture'
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
