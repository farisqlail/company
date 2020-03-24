<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use RealRashid\SweetAlert\Facades\Alert;
use App\Property;
use App\Blog;
use App\Agent;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $property = Property::all()->count();
        $blog = Blog::all()->count();
        $agent = Agent::all()->count();
        
        return view('admin.dashboard.index', compact('property', 'blog', 'agent'));
    }
}
