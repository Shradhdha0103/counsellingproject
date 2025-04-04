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
        $setting = setting::orderBy('id', 'desc')->first();
        $serviceMaster = serviceMaster::orderBy('id', 'asc')->get();
        return view('home', compact('setting', 'serviceMaster'));
    }

    // CMS
    function displaymenu(Request $request, $slug)
    {
        $slug = menus($slug);
        return view('cms', compact('slug'));
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
                'slug' => 'required',
                'desc' => 'required'
            ]);

            $cms = new cms();

            $cms->title = $request->title;
            $cms->slug = $request->slug;;
            $cms->desc =  $request->input('desc');
            $cms->status = $request->status;
            $cms->save();

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
            $cms = cms::find($id);

            $cmsEditRec = [
                'title' => $request->title,
                'slug' => $request->slug,
                'desc' => $request->desc,
                'status' => $request->status
            ];

            cms::where('id', $id)->update($cmsEditRec);
            return redirect()->route('admin.cms.index')->with('msg', 'Service updated successfully!');
        } catch (\Throwable $th) {
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
        $setting = setting::orderBy('id', 'desc')->first();
        return view('admin.home.setting', compact('setting'));
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
        $settings->phone = $request->phone;
        $settings->email = $request->email;
        $settings->footer_content = $request->footer_content;
        $settings->logo = $request->logo;
        $settings->insta_link = $request->insta_link;
        $settings->linkedin_link = $request->linkedin_link;
        $settings->website_link = $request->website_link;
        $settings->contact_link = $request->contact_link;

        // Handle file uploads if provided
        if ($request->hasFile('banner_image')) {
            // Store the banner image and update the path in the database
            $settings->banner_img = $request->file('banner_image')->store('images');
        }

        if ($request->hasFile('logo')) {
            // Store the logo image and update the path in the database
            $settings->logo = $request->file('logo')->store('images');
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
            return redirect()->route('admin.service_master.servicelist.blade')->with('msg', 'Service updated successfully!');
        } catch (\Throwable $th) {
            // Handle the exception appropriately
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }


    public function deleteService(Request $request)
    {
        // Decrypt the ID
        $serviceId = decrypt($request->id);

        // Find the blog and delete it
        $services = serviceMaster::find($serviceId);
        if ($services) {
            $services->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404); // Blog not found
    }

    function services($slug)
    {
        $serviceDetail = serviceMaster::where('slug', $slug)->first();
        // dd($serviceDetail);

        // $data['title'] = isset($serviceDetail['SEO_title']) && !empty($serviceDetail['SEO_title']) ? $serviceDetail['SEO_title'] : 'Worldclass application development agency | Unikwork Systems';
        // $data['description'] = isset($serviceDetail['meta_desc']) && !empty($serviceDetail['meta_desc']) ? $serviceDetail['meta_desc'] : 'Smart Software Development Solutions that Revolutionize the Way you Do Business';
        // // $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Blog page';
        // $data['key_word'] = isset($serviceDetail['meta_keyword']) && !empty($serviceDetail['meta_keyword']) ? $serviceDetail['meta_keyword'] : 'software development, software development solutions, technology service, software testing, software products';
        return view('services.service', compact('serviceDetail'));
    }


    // Blogs
    function displayblogs()
    {
        $blog = DB::table('blogs')->where('status', 1)->get();

        $pagename = seoPage('Blog page');

        // $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Sitemap page';
        // $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Sitemap | Unikwork Systems';
        // $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        // // dd($data);
        // $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, software development solutions, technology service, software testing, software products';

        // dd($blog);
        return view('blog', compact('blog'));
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
            return redirect()->route('admin.blogs.index')->with('msg', 'Blog updated successfully!');
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
        // $blogDetail = DB::table('blog')->where('slug', $slug)->first();
        $blogDetail = blogs::with('users')->where('slug', $slug)->first();
        // dd($blogDetail);

        // $data['title'] = isset($blogDetail['SEO_title']) && !empty($blogDetail['SEO_title']) ? $blogDetail['SEO_title'] : 'Worldclass application development agency | Unikwork Systems';
        // $data['description'] = isset($blogDetail['meta_desc']) && !empty($blogDetail['meta_desc']) ? $blogDetail['meta_desc'] : 'Smart Software Development Solutions that Revolutionize the Way you Do Business';
        // // $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Blog page';
        // $data['key_word'] = isset($blogDetail['meta_keyword']) && !empty($blogDetail['meta_keyword']) ? $blogDetail['meta_keyword'] : 'software development, software development solutions, technology service, software testing, software products';
        // dd($data);
        return view('blogDetails', compact('blogDetail'));
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
}