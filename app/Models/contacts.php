<?php

namespace App\Models;

// use App\Models\HasFactory;  

use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    // use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'message']; // Add the fillable fields here
}
