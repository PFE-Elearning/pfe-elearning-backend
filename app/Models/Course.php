<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formation;
class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'rating',
        'formation_id',
    ];
    public function formation(){
        return $this->belongsTo(Formation::class);
    }
}
