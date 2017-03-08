<?php

namespace App\Http\Controllers;

use App\LiveMessage;
use App\Presenter;
use App\Section;
use App\Sponsor;
use App\Workshop;
use Illuminate\Support\Facades\Route;

class SiteController extends Controller
{

    public static function routes()
    {
        // Landing page
        Route::get('/', 'SiteController@landing')->name('app::home');

        // Presenters
        Route::get('/presenter/{presenter}', 'SiteController@presenter')->name('app::presenter');

        // Timeline
        Route::get('/timeline','SiteController@timeline');

        // Registeration
        Route::get('/register','SiteController@register');

        // Live Blog
        Route::get('/live', 'SiteController@live')->name('app::live.index');

        // Sections
        // TODO: handle 2016 in a better way:D
        Route::get('/2016/{section}', 'SiteController@section')->name('app::section');

    }


    public function landing()
    {
        $presenters = Presenter::all();
        $workshops = Section::whereType('workshop')->get();
        $presentations = Section::whereType('presentation')->get();
        $sponsors = Sponsor::all();
        
        return view('landing.landing', [
            'presenters' => $presenters,
            'sections' => [
                'کارگاه ها'=>$workshops,
                'ارائه ها'=>$presentations,
            ],
            'sponsors' => $sponsors,
        ]);

    }

    public function timeline () {
        $sections = Section::all();
        return view('timeline.timeline', ['sections' => $sections]);
    }

    public function presenter(Presenter $presenter)
    {
        return view('presenter.presenter', [
            'presenter' => $presenter,
        ]);
    }

    public function section(Section $section)
    {
        $presenters = [];

        if($section->presenter)
            $presenters[]=Presenter::where('id',$section->presenter)->firstOrFail();

        if($section->presenters)
            foreach ($section->presenters as $presenter)
            $presenters[]=Presenter::where('id',$presenter)->firstOrFail();

        return view('section.section', [
            'section' => $section,
            'presenters' => $presenters,
        ]);
    }

    public function register() {
        return view('register.register');
    }

    public function live() {
        $msgs = LiveMessage::orderBy('published_at', 'desc')->get();
        return view('live.feed', [
            'messages' => $msgs,
        ]);
    }

}
