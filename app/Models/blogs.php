<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class, 'auth_id');
    }

    protected $fillable = ['id', 'title', 'sub_title', 'desc', 'feature_img', 'SEO_title', 'meta_desc', 'meta_keyword', 'blog_faq', 'status', 'created_at', 'updated_at'];
}