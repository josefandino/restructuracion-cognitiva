<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThoughtRequest;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Thought;

class ThoughtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
    }

    public function index()
    {   
        $thought = Thought::latest()->paginate(4);
        return view('home', compact('thought') );
    }

    public function create()
    {
        return view('thought.create', [
            'thought' => new Thought
        ]);
    }

    public function store(ThoughtRequest $request)
    {
        Thought::create($request->validated() );
        return redirect()->route('home')->with('success', 'La INFORMACIÓN ha sido agregada satisfactoriamente');
    }

    public function show($id)
    {
        return view('home', [
            'thought' => Thought::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $thought = Thought::find($id);
        return view('thought.edit', compact('thought') );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'uno'       => ['required', 'min:5', 'max:400'],
            'dos'       => ['required', 'min:5', 'max:400'],
            'tres'      => ['required', 'min:5', 'max:400'],
            'cuatro'    => ['required', 'min:5', 'max:400'],
            'cinco'     => ['required', 'min:5', 'max:400'],
            'seis'      => ['required', 'min:5', 'max:400'],
        ]);

        $thought = Thought::find($id);
        $thought->uno = $request->get('uno');
        $thought->dos = $request->get('dos');
        $thought->tres = $request->get('tres');
        $thought->cuatro = $request->get('cuatro');
        $thought->cinco = $request->get('cinco');
        $thought->seis = $request->get('seis');
        $thought->save();

        return redirect()->route('home')->with('primary', 'La INFORMACIÓN ha sido actaulizada correctamente.');
    }

    public function destroy($id)
    {
        $thought = Thought::find($id);
        $thought->delete();

        return redirect()->route('home')->with('danger', 'La INFORMACIÓN ha sido eliminada');
    }
}
