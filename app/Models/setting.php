<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $fillable = ['id', 'title', 'sub_title', 'readmore_content', 'banner_img', 'banner_video_link', 'banner_title1', 'banner_title2', 'banner_title3', 'banner_content1', 'banner_content2', 'banner_content3', 'work_title', 'getin_touch_title', 'first_session_title', 'beginyour_path_title', 'getin_touch_content', 'first_session_content', 'beginyour_path_content', 'therapy_title', 'therapy_heading', 'therapy_content', 'phone', 'email', 'footer_content', 'logo', 'insta_link', 'linkedin_link', 'website_link', 'contact_link', 'created_at', 'updated_at'];
}