<?php

namespace App\Http\Controllers\Ui;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\FrontendPage;
use App\Models\Page;

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
}
