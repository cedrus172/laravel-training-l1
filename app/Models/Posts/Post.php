<?php

namespace App\Models\Posts;

use App\Models\Categories\Category;
use App\Models\Images\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const TABLE = 'posts';
    protected $table = self::TABLE;
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'status',
        'views',
        'options',
        'category_id',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}