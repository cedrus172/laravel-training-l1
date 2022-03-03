<?php

namespace App\Models\Categories;

use App\Models\Posts\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const TABLE = 'categories';
    protected $table = self::TABLE;
    //protected $primaryKey = 'category_id';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'created_at',
        'updated_at'
    ];

    public function posts()
    {
        //return $this->hasMany(Post::class, 'category_id', 'category_id');
        return $this->hasMany(Post::class);
    }
}