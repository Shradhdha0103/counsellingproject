<?php

use App\Models\seo_tbl;
use App\Models\setting;
use App\Models\serviceMaster;
use App\Models\blogs;
use App\Models\cms;

function setting()
{
    $setting = setting::orderBy('id', 'desc')->first();
    return $setting;
}
function seoPage($pagename)
{
    $pagename = seo_tbl::where('page_name', $pagename)->first();
    return $pagename;
}
function services()
{
    $pagename = serviceMaster::all();
    return $pagename;
}
function blogs()
{
    $blogs = blogs::all();
    return $blogs;
}
function menuItems()
{
    // try {
    //     $menuItems = cms::where('slug', $slug)->all();
    //     dd($menuItems);
    //     return $menuItems;
    // } catch (\Throwable $th) {
    //     dd($th);
    //     //throw $th;
    // }
    $menuItems = cms::all();
    // dd($menuItems);
    return $menuItems;
}
function menus($slug)
{
    $menuItems = cms::where('slug', $slug)->first();
    // dd($menuItems);
    return $menuItems;
}