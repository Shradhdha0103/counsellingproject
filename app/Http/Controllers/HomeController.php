<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contacts;
use App\Models\blogs;
use App\Models\setting;
use App\Models\User;
use App\Models\cms;
use App\Models\seo_tbl;
use App\Models\serviceMaster;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    // Dashboard
    public function index()
    {
        $users = User::where('role', 2)->count();
        $contactUser = contacts::all()->count();
        $activeBlogs = blogs::where('status', 1)->count();
        return view('admin.dashboard', compact('users', 'contactUser', 'activeBlogs'));
    }

    // serviceMaster
    public function home()
    {
        $pagename = 'Home page';
        $setting = setting::orderBy('id', 'desc')->first();
        $serviceMaster = serviceMaster::orderBy('id', 'asc')->get();
        // dd("DDLDLDLDD", $pagename);
        return view('home', compact('setting', 'serviceMaster', 'pagename'));
    }

    // CMS
    function displaymenu(Request $request, $slug)
    {
        // dd("DKDKDKD", $slug);
        $cmsdata =  cms::where('slug', $slug)->first();
        // dd($data);
        // $slug = menus($slug);
        // dd($slug);
        $pagename = $slug;
        return view('cms', compact('cmsdata', 'slug', 'pagename'));
    }

    // CMS Setting
    public function cms()
    {
        $cms = cms::orderBy('id', 'desc')->get();
        return view('admin.cms.index', compact('cms'));
    }
    public function storecms()
    {
        return view('admin.cms.addcms');
    }
    public function addcms(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'slug' => 'required|unique:cms,slug',
                'desc' => 'required',
                'banner_image' => 'required'
            ]);

            $cms = new cms();

            $cms->title = $request->title;
            $cms->slug = $request->slug;;
            $cms->desc =  $request->input('desc');
            $cms->banner_image = $request->banner_image;
            $cms->status = $request->status;
            // Handle banner_image upload if provided
            if ($request->hasFile('banner_image')) {
                $file = $request->file('banner_image');
                $filename_banner_image = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/CMS_image', $filename_banner_image); // Save to storage/app/public/banner_image

                $cms->banner_image = $filename_banner_image;  // Update the banner_image field in the database
            } else {
                $cms->banner_image = $request->banner_image_show;
            }
            $cms->save();

            $seo = new seo_tbl();

            // Set the properties for the SEO record
            $seo->id = $cms->id;
            $seo->page_name = $cms->title; // Set the cms_id to link this SEO record with the CMS
            $seo->title = $request->slug;  // You can use the CMS title for meta_title
            $seo->description = $request->input('desc');;  // You can use the CMS 

            // Save the SEO record to the database
            $seo->save();

            return redirect()->route('cms')->with('msg', 'CMS Added successfully!');
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
    }
    public function editcms($id)
    {
        try {
            $pagename = 'Update CMS';
            $id = decrypt($id);
            $updateCMS = cms::find($id);
            return view('admin.cms.edit-cms', compact('updateCMS', 'pagename'));
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
    }

    public function editCMSData(Request $request)
    {
        try {
            $id = $request->id;
            $cms = cms::findOrFail($id);

            // Handle banner_image upload if provided
            if ($request->hasFile('banner_image')) {

                $file = $request->file('banner_image');
                $filename_banner_image = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/CMS_image', $filename_banner_image); // Save to storage/app/public/CMS_image

                $cms->banner_image = $filename_banner_image;  // Update the banner_image field in the database
            } else {
                // If no new image is uploaded, keep the existing one
                $cms->banner_image = $request->banner_image_show;
            }
            // dd($cms->banner_image);

            // Update the rest of the CMS data
            $cmsEditRec = [
                'title' => $request->title,
                'slug' => $request->slug,
                'desc' => $request->desc,
                'banner_image' => $request->banner_image,
                'status' => $request->status,
            ];
            // Update the database record
            $cms->save();
            return redirect()->route('cms')->with('msg', 'CMS  updated successfully!');
        } catch (\Throwable $th) {
            dd($th);
            // Handle the exception appropriately
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }

    public function deleteCMS(Request $request)
    {
        // Decrypt the ID
        $cmsId = decrypt($request->id);

        // Find the blog and delete it
        $cmss = cms::find($cmsId);
        if ($cmss) {
            $cmss->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404); // Blog not found
    }

    // Users
    function allUsers()
    {
        $users = User::all();
        return view('admin.users.allusers', compact('users'));
    }

    function allcontactus()
    {
        $allcontactus = contacts::all();
        return view('admin.users.allcontactus', compact('allcontactus'));
    }

    // Setting
    function setting()
    {
        $pagename = "Setting Page";
        $setting = setting::orderBy('id', 'desc')->first();
        return view('admin.home.setting', compact('setting', 'pagename'));
    }

    public function updateSettings(Request $request, $id)
    {
        $settings = setting::findOrFail($id);
        // Update fields
        $settings->title = $request->title;
        $settings->sub_title = $request->sub_title;
        $settings->readmore_content = $request->readmore_content;
        $settings->banner_img = $request->banner_img;
        $settings->banner_video_link = $request->banner_video_link;
        $settings->banner_title1 = $request->banner_title1;
        $settings->banner_title2 = $request->banner_title2;
        $settings->banner_title3 = $request->banner_title3;
        $settings->banner_content1 = $request->banner_content1;
        $settings->banner_content2 = $request->banner_content2;
        $settings->banner_content3 = $request->banner_content3;
        $settings->work_title = $request->work_title;
        $settings->getin_touch_title = $request->getin_touch_title;
        $settings->first_session_title = $request->first_session_title;
        $settings->beginyour_path_title = $request->beginyour_path_title;
        $settings->getin_touch_content = $request->getin_touch_content;
        $settings->first_session_content = $request->first_session_content;
        $settings->beginyour_path_content = $request->beginyour_path_content;
        $settings->therapy_title = $request->therapy_title;
        $settings->therapy_heading = $request->therapy_heading;
        $settings->therapy_content = $request->therapy_content;
        $settings->contact_title = $request->contact_title;
        $settings->contact_banner_img = $request->contact_banner_img;
        $settings->phone = $request->phone;
        $settings->email = $request->email;
        $settings->footer_content = $request->footer_content;
        $settings->logo = $request->logo;
        $settings->contact_background_img = $request->contact_background_img;
        $settings->blog_banner_image = $request->blog_banner_image;
        $settings->color = $request->color;
        $settings->fonts = $request->fonts;
        $settings->insta_link = $request->insta_link;
        $settings->linkedin_link = $request->linkedin_link;
        $settings->website_link = $request->website_link;
        $settings->contact_link = $request->contact_link;

        // Handle banner_img upload if provided
        if ($request->hasFile('banner_img')) {
            $file = $request->file('banner_img');
            $filename_banner_img = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/banner_img', $filename_banner_img); // Save to storage/app/public/banner_img

            $settings->banner_img = $filename_banner_img;  // Update the banner_img field in the database
        } else {
            $settings->banner_img = $request->banner_img_show;
        }

        if ($request->hasFile('contact_banner_img')) {
            $file = $request->file('contact_banner_img');
            $filename_contact_banner_img = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/contactBanner', $filename_contact_banner_img); // Save to storage/app/public/contact_banner_img

            $settings->contact_banner_img = $filename_contact_banner_img;  // Update the banner_img field in the database
        } else {
            $settings->contact_banner_img = $request->contact_banner_img_show;
        }
        if ($request->hasFile('blog_banner_image')) {
            $file = $request->file('blog_banner_image');
            $filename_blog_banner_image = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/BlogBanner', $filename_blog_banner_image); // Save to storage/app/public/blog_banner_image

            $settings->blog_banner_image = $filename_blog_banner_image;  // Update the banner_img field in the database
        } else {
            $settings->blog_banner_image = $request->blog_banner_image_show;
        }


        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename_logo = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/logo', $filename_logo);
            $settings->logo = $filename_logo;  // Update the logo field in the database
        } else {
            $settings->logo = $request->logo_show;
        }
        // Handle logo upload if provided
        if ($request->hasFile('footer_logo')) {
            $file = $request->file('footer_logo');
            $filename_footer_logo = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/footer_logo', $filename_footer_logo);
            $settings->footer_logo = $filename_footer_logo;  // Update the footer_logo field in the database
        } else {
            $settings->footer_logo = $request->footer_logo_show;
        }

        // Handle contact_background_img upload if provided
        if ($request->hasFile('contact_background_img')) {
            $file = $request->file('contact_background_img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/contact_background_img', $filename); // Save to storage/app/public/contact_background_img

            $settings->contact_background_img = $filename;  // Update the contact_background_img field in the database
        } else {
            $settings->contact_background_img = $request->contact_background_img_show;
        }
        // Save the updated settings
        $settings->save();

        // Redirect back with a success message
        return redirect()->route('setting', $id)->with('success', 'Settings updated successfully.');
    }

    // Service Master
    function service_list()
    {
        $services = DB::table('service_master')->get();
        return view('admin.service_master.servicelist', compact('services'));
    }

    function store()
    {
        return view('admin.service_master.add_service');
    }

    function add_service(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'sub_title' => 'required',
                'desc' => 'required',
                'image' => 'required'
            ]);

            $service_master = new serviceMaster();

            $service_master->title = $request->title;
            $service_master->slug = $request->slug;;
            $service_master->sub_title = $request->sub_title;
            $service_master->desc =  $request->input('desc');
            // $service_master->image = $request->image;
            $service_master->status = $request->status;

            // Handle the file upload for the feature image
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/services', $filename); // Save to storage/app/public/feature_images

                $service_master->image = $filename;
            }
            $service_master->save();

            return redirect()->route('service_list')->with('msg', 'Blog Added successfully!');
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
    }

    public function editservice($id)
    {
        try {
            $pagename = 'Update Service';
            $id = decrypt($id);
            $updateService = serviceMaster::find($id);
            // $auth_id = User::all();
            return view('admin.service_master.edit-service', compact('updateService', 'pagename'));
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
    }

    public function editServiceData(Request $request)
    {
        try {
            $id = $request->id;
            $service_master = serviceMaster::find($id);
            $image = $service_master->image; // Default to existing image if no new image is uploaded

            // Check if a file is uploaded
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $image = time() . '.' . $file->getClientOriginalExtension();
                // Store the file in the public storage
                $file->storeAs('public/services', $image); // Save to storage/app/public/blogs
            }

            $serviceEditRec = [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'slug' => $request->slug,
                'desc' => $request->desc,
                'image' => $image,
                'status' => $request->status
            ];

            serviceMaster::where('id', $id)->update($serviceEditRec);
            return redirect()->route('service_list')->with('msg', 'Service updated successfully!');
        } catch (\Throwable $th) {
            // Handle the exception appropriately
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }


    public function deleteService(Request $request)
    {
        // Decrypt the ID
        $serviceId = decrypt($request->id);

        $services = serviceMaster::find($serviceId);
        if ($services) {
            $services->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }

    function services($slug)
    {
        $pagename = 'Services';
        $serviceDetail = serviceMaster::where('slug', $slug)->first();
        return view('services.service', compact('serviceDetail', 'pagename'));
    }


    // Blogs
    function displayblogs()
    {
        $blog = DB::table('blogs')->where('status', 1)->get();
        $banner = setting::orderBy('id', 'desc')->first();
        $pagename = "Setting Page";

        // $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Sitemap page';
        // $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Sitemap | Unikwork Systems';
        // $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        // // dd($data);
        // $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, software development solutions, technology service, software testing, software products';

        // dd($blog);
        return view('blog', compact('blog', 'pagename', 'banner'));
    }
    function blogs(Request $request)
    {
        $blogs = blogs::all();
        return view('admin.blogs.blogList', compact('blogs'));
    }

    function addblog()
    {
        $auth_id = User::all();
        return view('admin.blogs.addblog', compact('auth_id'));
    }
    public function addblogs(Request $request)
    {
        $request->validate([
            'slug' => 'required',
            'auth_id' => 'required',
            'title' => 'required',
            'desc' => 'required'
        ]);

        $Blogs = new blogs();

        $Blogs->slug = $request->slug;
        $Blogs->auth_id = $request->auth_id;;
        $Blogs->title = $request->title;
        $Blogs->sub_title = $request->sub_title;
        $Blogs->desc =  $request->input('desc');
        // $Blogs->feature_img = $request->feature_img;
        $Blogs->SEO_title = $request->SEO_title;
        $Blogs->meta_desc = $request->meta_desc;
        $Blogs->meta_keyword = $request->meta_keyword;
        $Blogs->blog_faq = $request->blog_faq;
        $Blogs->status = $request->status;

        // Handle the file upload for the feature image
        if ($request->hasFile('feature_img')) {
            $file = $request->file('feature_img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/blogs', $filename); // Save to storage/app/public/feature_images

            $Blogs->feature_img = $filename;
        }
        $Blogs->save();
        // dd($Blogs);


        // return view('admin.blogs.index')->with('msg', 1);
        return redirect()->route('bloglist')->with('msg', 'Blog Added successfully!');
    }

    public function editblog($id)
    {
        try {
            $pagename = 'Update Blog';
            $id = decrypt($id);
            $updateBlog = blogs::find($id);
            $auth_id = User::all();
            return view('admin.blogs.edit-blog', compact('updateBlog', 'auth_id', 'pagename'));
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
    }

    public function editBlogData(Request $request)
    {
        try {
            $id = $request->id;
            $blog = blogs::find($id);
            $filename = $blog->feature_img; // Default to existing image if no new image is uploaded

            // Check if a file is uploaded
            if ($request->hasFile('feature_img')) {
                $file = $request->file('feature_img');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // Store the file in the public storage
                $file->storeAs('public/blogs', $filename); // Save to storage/app/public/blogs
            }

            $blogEditRec = [
                'auth_id' => $request->auth_id,
                'slug' => $request->slug,
                'title' => $request->title,
                'desc' => $request->desc,
                'feature_img' => $filename,
                'SEO_title' => $request->SEO_title,
                'meta_desc' => $request->meta_desc,
                'meta_keyword' => $request->meta_keyword,
                'blog_faq' => $request->blog_faq,
                'status' => $request->status
            ];

            blogs::where('id', $id)->update($blogEditRec);
            return redirect()->route('bloglist')->with('msg', 'Blog updated successfully!');
        } catch (\Throwable $th) {
            // Handle the exception appropriately
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }


    public function deleteBlog(Request $request)
    {
        // Decrypt the ID
        $blogId = decrypt($request->id);

        // Find the blog and delete it
        $blog = blogs::find($blogId);
        if ($blog) {
            $blog->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404); // Blog not found
    }

    function blogDetails($slug)
    {
        // dd($slug);
        $pagename = 'Blog Details';
        // $blogDetail = DB::table('blog')->where('slug', $slug)->first();
        $blogDetail = blogs::with('users')->where('slug', $slug)->first();
        // dd($blogDetail);

        // $data['title'] = isset($blogDetail['SEO_title']) && !empty($blogDetail['SEO_title']) ? $blogDetail['SEO_title'] : 'Worldclass application development agency | Unikwork Systems';
        // $data['description'] = isset($blogDetail['meta_desc']) && !empty($blogDetail['meta_desc']) ? $blogDetail['meta_desc'] : 'Smart Software Development Solutions that Revolutionize the Way you Do Business';
        // // $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Blog page';
        // $data['key_word'] = isset($blogDetail['meta_keyword']) && !empty($blogDetail['meta_keyword']) ? $blogDetail['meta_keyword'] : 'software development, software development solutions, technology service, software testing, software products';
        // dd($data);
        return view('blogDetails', compact('blogDetail', 'pagename'));
    }


    // SEO
    function seo_details(Request $request)
    {
        try {
            $pagename = 'SEO Details';
            $seoList = seo_tbl::all();
            return view('admin.seo.index', compact('seoList', 'pagename'));
        } catch (Exception $e) {
            abort(500);
        }
    }
    public function storeseo()
    {
        return view('admin.seo.addseo');
    }
    public function addSEO(Request $request)
    {
        try {
            // Validate the incoming request
            $request->validate([
                'page_name' => 'required',
                'title' => 'required',
                'description' => 'required',
                'key_word' => 'required'
            ]);

            // Create a new SEO record
            $seoDetails = new seo_tbl();

            // Set the properties based on the incoming request
            $seoDetails->page_name = $request->page_name;
            $seoDetails->title = $request->title;
            $seoDetails->description = $request->description;
            $seoDetails->key_word = $request->key_word;

            // Save the record in the database
            $seoDetails->save();

            // Redirect to the SEO index route with a success message
            return redirect()->route('seo_details')->with('msg', 'SEO Added successfully!');
        } catch (\Throwable $th) {
            // Catch any exceptions and handle errors
            dd($th);
        }
    }
    public function editSEO($id)
    {
        try {
            $pagename = 'Update SEO';
            $id = decrypt($id);
            $updateSEO = seo_tbl::find($id);
            return view('admin.seo.editSEO', compact('updateSEO', 'pagename'));
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
    }
    public function editSEOData(Request $request)
    {
        try {
            $id = $request->id;
            $seo = seo_tbl::find($id);

            $seoEditRec = [
                // 'id' => $request->id,
                'page_name' => $request->page_name,
                'title' => $request->title,
                'description' => $request->description,
                'key_word' => $request->key_word
            ];

            seo_tbl::where('id', $id)->update($seoEditRec);
            return redirect()->route('seo_details')->with('msg', 'SEO updated successfully!');
        } catch (\Throwable $th) {
            // Handle the exception appropriately
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }
    public function deleteSEO(Request $request)
    {
        $seoId = decrypt($request->id);

        // Find the blog and delete it
        $seo = seo_tbl::find($seoId);
        if ($seo) {
            $seo->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404); // seo not found
    }

    public function privacy()
    {
        $pagename = 'Privacy';
        return view('privacy', compact('pagename'));
    }
}