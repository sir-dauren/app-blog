<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'full_text',
        'images',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
