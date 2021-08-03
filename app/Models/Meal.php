<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'meals';

    protected $fillable = ['title', 'description'];

    public function allergy() {
        return $this->belongsTo(Allergy::class);
    }

    public function items() {
        return $this->belongsToMany(Item::class)->withPivot('category');
    }
}
