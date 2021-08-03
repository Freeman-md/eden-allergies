<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Allergy extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "allergies";

    protected $fillable = ['title', 'description'];

    public function meals() {
        return $this->hasMany(Meal::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
