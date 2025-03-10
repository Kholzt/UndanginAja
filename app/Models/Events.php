<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = "events";
    protected $fillable = ['title', 'event_date_start', "event_date_end", "address", "map_address", "map_address_preview", "comment_id", "isPrimary"];
}
