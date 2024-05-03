<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];

    protected static function booted(): void
    {
        static::retrieved(function($model) {
            info('Retrieved model: ', $model->toArray());
        });
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
