<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarientValue extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the VarientValue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function varient(): BelongsTo
    {
        return $this->belongsTo(Varient::class);
    }
}
