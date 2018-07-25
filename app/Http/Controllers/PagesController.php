<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index()
   {
   	$title = 'INDEX';
    return view('pages.index')->with('title',$title);
   	
   }
   public function about()
   {
    $title = 'ABOUT';
    return view('pages.about')->with('title',$title);
   	
   }
   public function services()
   {
    $title = 'Services';
    return view('pages.google')->with('title',$title);
   	
   }
   public function map()
   {
    $title = 'Map';
    return view('pages.map')->with('title',$title);
    
   }
   public function mapload()
   {
    $title = 'MapLoad';
    return view('pages.map')->with('title',$title);
    
   }
}
