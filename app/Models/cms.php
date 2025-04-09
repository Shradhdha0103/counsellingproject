<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cms extends Model
{
    use HasFactory;
    // public $table = "cms";
    protected $fillable = ['id', 'title', 'slug', 'desc', 'banner_image', 'status', 'created_at', 'updated_at'];
}