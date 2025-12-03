<?php

namespace App\Http\Controllers;

use App\Models\HeroPage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $hero=HeroPage::all();
        return view('page.index',compact('hero'));
    }
    public function dashboard(){
        return view('page.dashboard');
    }

    public function main(){
        return view('page.dashboard_main');
    }
}
