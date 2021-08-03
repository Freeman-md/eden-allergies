<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    public const MAIN_ITEM = 'main';
    public const SIDE_ITEM = 'item';

    protected $table = 'items';

    protected $fillable = ['title', 'description'];

    public function meals() {
        return $this->belongsToMany(Meal::class);
    }
}
