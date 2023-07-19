<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}