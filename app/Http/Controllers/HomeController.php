<?php

namespace App\Http\Controllers;

use App\Thought;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
    }

    public function index()
    {   
        $thought = Thought::latest()->paginate(5);
        return view('home', compact('thought') );
    }
}
