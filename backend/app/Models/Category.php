<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * Get all of the ads for the Category
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function ads(){
        return $this->hasMany(Ad::class);
    }
}
