<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'contact_groups';

     // Relations
     public function user()
     {
         return $this->belongsTo('App\Models\User');
     }
}
