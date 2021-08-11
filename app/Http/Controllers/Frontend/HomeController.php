<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\backend\about;
use App\Models\backend\Event;
use App\Models\frontend\post;
use App\Models\frontend\announcement;
use App\Models\backend\slider;
use App\Models\backend\activity;
use App\Models\backend\StaticPages;
use App\Models\backend\testimonial;
use App\Models\backend\advertisement;

use App\Http\Controllers\Frontend\BaseFrontendController;

/**
 * Class HomeController.
 */
class HomeController extends BaseFrontendController
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {


        $sliders = slider::where('status',1)->paginate();
        $event = Event::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date')->first();
        $events = Event::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date')->paginate(3);
        $about = about::find(1);
        //its just a dummy data object.
        $testimonials = testimonial::all();

        $posts = post::orderBy("id", "desc")->paginate(3);
        $announcements = announcement::orderBy("id", "desc")->paginate(3);

         $advertisement = advertisement::orderBy("id", "desc")->Where('ad_order',1)->limit(1)->get();
         $advertisementleft = advertisement::orderBy("id", "desc")->Where('ad_order',0)->limit(1)->get();
         $advertisementright = advertisement::orderBy("id", "desc")->Where('ad_order',2)->limit(1)->get();

        $activities = activity::orderBy("id", "desc")->paginate(3);

        $bylaws = StaticPages::where('id', 1)->select( 'g_title_tr', 'g_text_tr', 'g_pdf')->get()->first();





        return view('frontend.index',compact('sliders', 'announcements','advertisement','advertisementleft','advertisementright','event', 'events', 'about', 'testimonials', 'posts', 'activities', 'bylaws'));
    }
}
