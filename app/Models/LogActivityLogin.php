<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivityLogin extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'username', 'name', 'activity', 'no_activity', 'ip_address'
    ];

}
