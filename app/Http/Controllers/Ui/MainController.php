<?php

namespace App\Http\Controllers\Ui;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\FrontendPage;
use App\Models\Page;
use App\Models\Blog;
use DB;
class MainController extends Controller
{
    public function index(){
        $home_settings = Cache::get('home_settings', function () {
            $page = FrontendPage::where('slug', 'index')->first();
            return $page;
        });
        return view('ui.pages.index',[
            'page_details' => $home_settings
        ]);
    }
    public function about(){    
        $about_settings = Cache::get('about_settings', function () {
            $page = Page::where('slug', 'about')->first();
            return $page;
        });
        return view('ui.pages.about',[
            'page_details' => $about_settings
        ]);
    }
    public function why_ddha() {
        $why_settings = Cache::get('why_settings', function () {
            $page = Page::where('slug', 'why')->first();
            return $page;
        });
        return view('ui.pages.why',[
            'page_details' => $why_settings
        ]);
    }
    public function learning() {
        $learning_settings = Cache::get('learning_settings', function () {
            $page = Page::where('slug', 'learning')->first();
            return $page;
        });
        return view('ui.pages.learning',[
            'page_details' => $learning_settings
        ]);
    }
    public function personalized() {
        $personalized_settings = Cache::get('personalized_settings', function () {
            $page = Page::where('slug', 'personalized')->first();
            return $page;
        });
        return view('ui.pages.personalized',[
            'page_details' => $personalized_settings
        ]);
    }
    public function organic() {
        $organic_settings = Cache::get('organic_settings', function () {
            $page = Page::where('slug', 'organic')->first();
            return $page;
        });
        return view('ui.pages.organic',[
            'page_details' => $organic_settings
        ]);
    }
    public function benefits() {
        $benefits_settings = Cache::get('benefits_settings', function () {
            $page = Page::where('slug', 'benefits')->first();
            return $page;
        });
        return view('ui.pages.benefits',[
            'page_details' => $benefits_settings
        ]);
    }
    public function affiliation_cbse() {
        $affiliation_cbse_settings = Cache::get('affiliation_cbse_settings', function () {
            $page = Page::where('slug', 'affiliation-cbse')->first();
            return $page;
        });
        return view('ui.pages.affiliation_cbse',[
            'page_details' => $affiliation_cbse_settings
        ]);
    }
    public function curriculum() {
        $curriculum_settings = Cache::get('curriculum_settings', function () {
            $page = Page::where('slug', 'curriculum')->first();
            return $page;
        });
        return view('ui.pages.curriculum',[
            'page_details' => $curriculum_settings
        ]);
    }
    public function career_guidance_cell() {
        $career_guidance_cell_settings = Cache::get('career_guidance_cell_settings', function () {
            $page = Page::where('slug', 'career-guidance-cell')->first();
            return $page;
        });
        return view('ui.pages.career_guidance_cell',[
            'page_details' => $career_guidance_cell_settings
        ]);
    }
    public function library() {
        $library_settings = Cache::get('library_settings', function () {
            $page = Page::where('slug', 'library')->first();
            return $page;
        });
        return view('ui.pages.library',[
            'page_details' => $library_settings
        ]);
    }
    public function admission_at_ddha() {
        $admission_at_ddha_settings = Cache::get('admission_at_ddha_settings', function () {
            $page = Page::where('slug', 'admission-at-ddha')->first();
            return $page;
        });
        return view('ui.pages.admission',[
            'page_details' => $admission_at_ddha_settings
        ]);
    }
    public function withdrawal_policy() {
        $withdrawal_policy_settings = Cache::get('withdrawal_policy_settings', function () {
            $page = Page::where('slug', 'withdrawal-policy')->first();
            return $page;
        });
        return view('ui.pages.withdrawal_policy',[
            'page_details' => $withdrawal_policy_settings
        ]);
    }
    public function contact() {
        $contact_settings = Cache::get('contact_settings', function () {
            $page = Page::where('slug', 'contact-us')->first();
            return $page;
        });
        return view('ui.pages.contact',[
            'page_details' => $contact_settings
        ]);
    }
    public function blog() {
        $blog_settings = Cache::get('blog_settings', function () {
            $page = Page::where('slug', 'blog')->first();
            return $page;
        });
        $blogs = Blog::where('status',1)->paginate(4);
        return view('ui.pages.blog',[
            'page_details' => $blog_settings,
            'blogs'=>$blogs
        ]);
    }
    public function blog_view($slug) {
        if (!$blog = Blog::where('status',1)->where('slug',$slug)->first()) {
            return abort('404');
        }
        $blogs = Blog::where('status',1)->where('id','!=',$blog->id)->take(6)->get();
        return view('ui.pages.blog_details',[
            'page_details' => $blog,
            'blogs'=>$blogs
        ]);
    }

    public function dynamic($slug, Request $request)  {
        
        $from_url = str_replace(url('/') . '/', '', $request->fullUrl());
        $check_redirect = DB::table('redirects')->where('redirect_from', $from_url)->first();

        if ($check_redirect) {
            if ($check_redirect->redirect_to == '') {
                return redirect()->to(url('/'), 301);
            } else {
                return redirect()->to(url($check_redirect->redirect_to), 301);
            }
        }elseif (!$page = Page::where('slug',$slug)->where('status',1)->first()) {
            return abort('404');
        }

        return view('ui.pages.dynamic',[
            'page_details' => $page
        ]);
        
    }
}
