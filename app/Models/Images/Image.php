<?php

namespace App\Models\Images;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    const TABLE = 'images';
    protected $table = self::TABLE;
    protected $fillable = [
        'url',
        'file_name',
        'created_at',
        'updated_at'
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}