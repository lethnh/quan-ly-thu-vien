<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['name', 'author', 'price', 'amount', 'isbn', 'category_id', 'images'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute()
    {
        if (empty($this->images)) {
            return null;
        }
        if (strpos($this->images, 'https://') !== false) {
            return $this->images;
        }
        return url('storage/' . $this->images);
    }
}
