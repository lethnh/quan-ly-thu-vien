<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name','images'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function getAvatarUrlAttribute()
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
