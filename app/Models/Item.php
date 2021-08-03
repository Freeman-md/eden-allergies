<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'items';

    protected $fillable = ['title', 'description'];

    public function meals() {
        return $this->belongsToMany(Meal::class)->withPivot('category');
    }
}
