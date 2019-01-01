<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
	    return view('welcome')->withTasks([
			'Go to the store',
			'Record screencast',
			'Do my homework',
			'Something Else',
            'Josh smells of poo poo'
		])->withTitle(request('title'));
    }

    public function about()
    {
    	return view('about');
    }

    public function contact()
    {
    	return view('contact');
    }
}
