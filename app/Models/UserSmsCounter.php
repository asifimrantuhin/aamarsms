<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSmsCounter extends Model
{
    use HasFactory;
    protected $table = 'user-sms-count';


    public function user()
    {
        return $this->belongsTo('App\Models\User'); // assuming this is the path for User model
    }

}
