<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'postalcode',
        'city',
        'district',
        'street',
        'number',
        'reference'
    ];

    /**
     * Get all of the ads for the Address
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ads(){
        return $this->hasMany(Ad::class);
    }
}
