<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'quantity',
        'status',
        'image',
    ];
    
    /**
     * Get the user that owns the Ad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the category that owns the Ad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Get the address that owns the Ad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function address(){
        return $this->belongsTo(Address::class, 'address_id');
    }

}
