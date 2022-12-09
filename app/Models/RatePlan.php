<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatePlan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'rate_plan';

     // Relations
     public function user()
     {
         return $this->belongsTo(User::class);
     }

     public function reseller()
     {
         return $this->belongsTo(User::class);
     }
}
