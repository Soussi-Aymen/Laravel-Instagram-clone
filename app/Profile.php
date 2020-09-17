<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image :  '/uploads/EB2SWx0vUGhzGP3gqN41kdwASvRRY8z2N467uqIn.png'; 
       return '/storage/' . $imagePath ;   }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
