<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['false'];

    const NOT_PUBLISHED = 0;
    const IS_PUBLISHED = 1;

    static function setPublished(){
        return[
            self::NOT_PUBLISHED => 'Не опубликовано',
            self::IS_PUBLISHED => 'Опубликовано'
        ];
    }

    public function getPublishedTitleAttribute()
    {
        return self::setPublished()[$this->is_published];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
