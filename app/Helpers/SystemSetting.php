<?php

use App\Models\seo_tbl;
use App\Models\setting;
use App\Models\serviceMaster;
use App\Models\blogs;
use App\Models\cms;

function metaData($pagename)
{
    $pagename = seo_tbl::where('page_name', $pagename)->first();
    return $pagename;
}

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
    $pagename = serviceMaster::where('status', 1)->get();
    return $pagename;
}
function blogs()
{
    $blogs = blogs::where('status', 1)->get();
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
    $menuItems = cms::where('status', 1)->get();
    // dd($menuItems);
    return $menuItems;
}
function menus($slug)
{
    $menuItems = cms::where('slug', $slug)->where('status', 1)->first();
    // dd($menuItems);
    return $menuItems;
}
