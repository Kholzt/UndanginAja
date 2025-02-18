<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = "events";
    protected $fillable = ['title', 'event_date', "address", "map_address", "comment_id","isPrimary"];
}
