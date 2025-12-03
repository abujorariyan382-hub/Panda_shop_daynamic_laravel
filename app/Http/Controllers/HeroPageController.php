<?php

namespace App\Http\Controllers;

use App\Models\HeroPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HeroPageController extends Controller
{
    public function hero(){
        return view('page.hero.create_hero');
    }

    public function store(Request $request){
           $this->validate($request, [
            'title' => 'required|string',
            'hero_image' => 'required|image',
            'description' => 'required|string', 
        ]);

        $hero = new HeroPage();
        $hero->title = $request->title;
        $hero->price = $request->price;

        $hero->description = $request->description;

        $hero_file = $request->file('hero_image');
        Storage::putFile('public/img/', $hero_file);
        $hero->hero_image = "storage/img/".$hero_file->hashName();


        
  $hero->save();

 return redirect()->route('hero.page')->with('success'," hero page data hass been store successfuly");

    }

    public function list(){
        $hero=HeroPage::all();
        return view('page.hero.list_hero',compact('hero'));
    }

    public function edit($id){
        $hero=HeroPage::find($id);
        return view('page.hero.edit_hero',compact('hero'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required|string',
          
            'description' => 'required|string', 
        ]);

        $hero =  HeroPage::find($id);
        $hero->title = $request->title;
        $hero->price = $request->price;
        $hero->description = $request->description;


        if($request->file('hero_image')){
        $hero_file = $request->file('hero_image');
        Storage::putFile('public/img/', $hero_file);
        $hero->hero_image = "storage/img/".$hero_file->hashName();


        }
      

        
  $hero->save();

 return redirect()->route('list.page.hero')->with('success'," hero page data hass been update successfuly");

    }

    public function delete($id){
        $hero=HeroPage::find($id);
        $hero->delete();

        return Redirect()->route('list.page.hero')->with('success', " hero page deta hassbeen delete");
    }
}
