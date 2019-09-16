<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ?  $this->image : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvOnz69-f-lt1ZC1TKbyTVPnmpLanE8_nhXKPeftbepmg0mLmi5Q';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
