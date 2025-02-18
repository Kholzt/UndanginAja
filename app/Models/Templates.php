<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    protected $table = "templates";
    protected $fillable = ["title", "price", "thumbnail", "category_id", "discount", "template"];
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
