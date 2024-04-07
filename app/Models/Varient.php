<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varient extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the Varient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    /**
     * Get all of the comments for the Varient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function varient_values(): HasMany
    {
        return $this->hasMany(VarientValue::class);
    }
}
