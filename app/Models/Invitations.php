<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitations extends Model
{
    protected $table = "invitations";
    protected $fillable = ["title", "template_id", "status"];

    public function wedding_details()
    {
        return $this->hasOne(WeddingDetails::class, 'invitation_id');
    }
    public function events()
    {
        return $this->hasMany(Events::class, 'invitation_id');
    }
    public function template()
    {
        return $this->belongsTo(Templates::class, 'template_id');
    }
    public function primaryEvents()
    {
        return $this->hasOne(Events::class, 'invitation_id')->where("isPrimary", 1);
    }
}
