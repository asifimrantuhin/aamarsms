<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonMask extends Model
{
    use HasFactory;

    protected $table = 'nonmasking';
    protected $guarded = [];
    // Relations
    // One Mask has many user thus we need User belongsTo relation here
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

   

    
}
