<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the Products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sub_category(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
    /**
     * Get all of the comments for the Products
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function varients(): HasMany
    {
        return $this->hasMany(Varient::class);
    }
    /**
     * Get all of the comments for the Products
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_lines(): HasMany
    {
        return $this->hasMany(OrderLine::class);
    }
}
