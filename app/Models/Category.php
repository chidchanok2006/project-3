<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='category';

    protected $guarded =[
        'create_at',
        'update_at',
    ];

    public function category(): HasMany
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
