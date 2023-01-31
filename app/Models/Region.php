<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name_oz',
        'name_uz',
        'name_ru',
        'name_en',
        'regional_center',
        'status',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function managements(): HasMany
    {
        return $this->hasMany(Management::class, 'region_id', 'id');
    }
}
