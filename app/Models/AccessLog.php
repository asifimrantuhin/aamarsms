<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject', 'url', 'method', 'ip', 'agent', 'user_id'
    ];

    protected $table = 'log_activities';

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// AccessLog has user_id , we need username from User Table. So belongsTo
