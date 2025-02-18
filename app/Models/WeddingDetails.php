<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeddingDetails extends Model
{
    protected $table = "wedding_details";
    protected $fillable = ['groom_name', 'bride_name', "parent_groom", "parent_bride", "invitation_id"];
}
