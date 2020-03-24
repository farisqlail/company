<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use App\Blog;
use App\Profile;
use App\Property;
use App\Type;

class HomeController extends Controller
{
    
    public function index()
    {
        $agents = Agent::paginate(4);
        $blogs = Blog::paginate(4);
        $profiles = Profile::find(1);
        $properties = Property::paginate(10);
        $types = Type::all();
    
        return view('frontend.home', ['agents' => $agents]);
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

}
