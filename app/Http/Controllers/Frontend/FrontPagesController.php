<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Auth\User;
use App\Models\backend\team;
use App\Models\backend\Event;
use App\Models\frontend\post;
use App\Models\frontend\announcement;
use App\Models\backend\Gallery;
use App\Models\backend\Company;
use App\Models\backend\activity;
use App\Models\backend\unit_type;
use App\Models\backend\StaticPages;
use App\Models\backend\activity_type;
use App\Models\backend\advertisement;
use App\Models\backend\FoundingMembers;
use App\Models\backend\AdvisoryBoard;
use App\Models\backend\SupervisoryBoard;
use App\Models\backend\BoardofDirectors;


use App\Models\backend\ShoppingModel;


use App\Http\Controllers\Frontend\BaseFrontendController;

/**
 * Class HomeController.
 */
class FrontPagesController extends BaseFrontendController
{

    public function activities()
    {
        $activities = activity::orderBy("id", "desc")->paginate(6);
        return view('frontend.activities.activities', compact('activities'));
    }


     public function activity(activity $activity)
    {
        return view('frontend.activities.activity-single', compact('activity'));
    }




    public function activitytype(activity_type $activitytype)
    {
        $activities = $activitytype->activities();

        return view('frontend.activities.activities_by_activity', compact('activitytype','activities'));
    }

    public function unittype(unit_type $unittype)
    {
        $posts = $unittype->posts();
        $activities = $unittype->activities();
        return view('frontend.news.news_by_unit', compact('unittype','posts', 'activities'));

    }


    public function news()
    {

        $posts = post::orderBy("id", "desc")->paginate(6);
        return view('frontend.news.news', compact('posts'));
    }
   


    public function news_single(Post $post)
    {
        return view('frontend.news.new-single', compact('post'));
    }


    public function unit_type_news(unit_type $unittype)
    {
        $posts = $unittype->posts();
        $activities = $unittype->activities();
        return view('frontend.news.news_by_unit', compact('unittype','posts', 'activities'));
    }


    public function announcements()
    {

        $announcements = announcement::orderBy("id", "desc")->paginate(6);
        return view('frontend.announcements.announcements', compact('announcements'));
    }
   


    public function announcements_single(announcement $announcement)
    {
        return view('frontend.announcements.announcement-single', compact('announcement'));
    }


    public function unit_type_announcements(unit_type $unittype)
    {
        $announcements = $unittype->announcements();
        $activities = $unittype->activities();
        return view('frontend.announcements.announcements_by_unit', compact('unittype','announcements', 'activities'));
    }


    public function organizational_structure()
    {
        $o_s = StaticPages::where('id', 1)->select( 'o_title_tr', 'o_text_tr', 'o_image')->get()->first();
        return view('frontend.organizational-structure', compact('o_s'));
    }

    public function bylaws()
    {
        $bylaws = StaticPages::where('id', 1)->select( 'g_title_tr','g_text_tr', 'g_pdf')->get()->first();
        return view('frontend.bylaws', compact('bylaws'));
    }



    public function executive_management()
    {
        $teams = team::all();
        return view('frontend.executive-management', compact('teams'));
    }

    public function founding_members()
    {
        $founding_members = FoundingMembers::all();
        return view('frontend.founding_members.founding_member', compact('founding_members'));
    }

    public function supervisoryboard()
    {
        $supervisoryboard = SupervisoryBoard::all();
        return view('frontend.supervisoryboard.supervisoryboard', compact('supervisoryboard'));
    }
    public function advisory()
    {
        $advisory = AdvisoryBoard::all();
        return view('frontend.advisory.advisory', compact('advisory'));
    }

    public function boardofdirectory()
    {
        $boardofdirectory = BoardofDirectors::all();
        return view('frontend.boardofdirectory.boardofdirectory', compact('boardofdirectory'));
    }
 



    public function events()
    {
        $events = Event::orderBy("id","desc")->paginate(6);
        return view('frontend.events.events', compact('events'));
    }


    public function event(Event $event)
    {
        return view('frontend.events.event-single', compact('event'));
    }

    public function memberPostings()
    {
        

         return view('frontend.member_postings.member postings');
    }
    public function markets()
    {
        

         return view('frontend.markets.markets');
    }
    
    
    public function companies(Company $companies)
    {
        $companiesa = Company::Where('category','Mobilya-Beyaz Eşya')->paginate(4);
        $companiesb = Company::Where('category','Ayakkabı - Giyim')->paginate(4);
        $companiesc = Company::Where('category','Yiyecek - İçecek')->paginate(4);
        $companiesd = Company::Where('category','Sağlık - Eğitim')->paginate(4);
        $companiese = Company::Where('category','Otomotiv')->paginate(4);
        $companiesf = Company::Where('category','Diğerleri')->paginate(4);


        
        return view('frontend.companies.companies', compact('companiesa','companiesb','companiesc','companiesd','companiese','companiesf'));
    }
    


   /* public function companies()
    {

        $companies = Company::orderBy("id", "desc")->paginate(4);
        return view('frontend.companies.companies', compact('companies'));
    }*/
    public function companie(Company $companie)
    {

        return view('frontend.companies.companie-single', compact('companie'));
    }

    public function advertisement(advertisement $advertisement)
    {
      
     // $advertisement = advertisement::where('ad_order',$ad_order)->where('ad_order', '=', 0)->limit(10)->get();
        $advertisement = advertisement::Where('ad_order',0)->limit(1)->get();;
        
        return view('frontend.index', compact('advertisement'));
    }

 


    public function terms_of_use()
    {
        $terms_of_use = StaticPages::where('id', 1)->select('t_title_tr','t_text_tr')->get()->first();
        return view('frontend.terms-of-use', compact('terms_of_use'));
    }




    public function privacy_policy()
    {
        $privacy_policy = StaticPages::where('id', 1)->select('p_title_tr','p_text_tr')->get()->first();
        return view('frontend.privacy-policy', compact('privacy_policy'));
    }



    public function board_of_directors()
    {
        $members = User::Where('is_board',1)->get();
        return view('frontend.board-of-directors', compact('members'));
    }





    public function gallery()
    {
        $galleries = Gallery::orderBy("id", "desc")->paginate(9);
        return view('frontend.gallery', compact('galleries'));
    }


    public function shopping()
    {

        $shopping = ShoppingModel::orderBy("id", "desc")->paginate(8);
        return view('frontend.shopping.shopping', compact('shopping'));
    }
    public function shoppings(ShoppingModel $shoppings)
    {

        return view('frontend.shopping.shopping-single', compact('shoppings'));
    }









}
