<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait WithUuid
{
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
