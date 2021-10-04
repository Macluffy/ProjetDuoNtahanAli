<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Aboutbtn;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Titre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data1 = Header::all();
        $data2 = Hero::all();
        $data3 = About::all();
        $data4 = Aboutbtn::all();
        $data5 = Feature::all();
        $data6 = Service::all();
        $data7 = Titre::all();
        $portfolio = Portfolio::all();
        $testimonial = Testimonial::all();
        $team = Team::all();
        $contact = Contact::all();
        $footer = Footer::all();
        return view('pages.index',compact('data1','data2','data3','data4','data5','data6','data7','portfolio','testimonial','team','contact','footer'));
    }
}
