<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    public $timestamps = false;
    protected $fillable = ['ip_address', 'visited_at'];
}
