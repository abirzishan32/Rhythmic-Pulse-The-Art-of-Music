<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    use HasFactory;
    protected $table = 'news_items';

    // Specify fillable fields to allow mass assignment
    protected $fillable = ['title', 'summary', 'image_url', 'full_article_link'];

}
