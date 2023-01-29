<?php

namespace App\Http\Controllers;

use App\Models\Saskaita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SaskaitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        /** ->execpt() ?*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request->search){
        $saskaitos = Saskaita::all()->sortBy('pavarde')->sortBy('vardas');
        return view('back.index', [
            'saskaitos' => $saskaitos,
            'search' => $request->search ?? '',
            'request'=> $request
        ]);
        } else {
            if($request->by == 'vardas') {
                $saskaitos = Saskaita::where('vardas','like','%'.$request->search.'%')->get();
                return view('back.index', [
                'saskaitos' => $saskaitos,
                'search' => $request->search ?? '',
                'request'=> $request
            ]);
            }
            if($request->by == 'pavarde') {
                $saskaitos = Saskaita::where('pavarde','like','%'.$request->search.'%')->get();
                return view('back.index', [
                'saskaitos' => $saskaitos,
                'search' => $request->search ?? '',
                'request'=> $request
            ]);
            }
            if($request->by == 'more') {
                $saskaitos = Saskaita::where('suma','<','%'.$request->search.'%')->get();
                return view('back.index', [
                'saskaitos' => $saskaitos,
                'search' => $request->search ?? '',
                'request'=> $request
            ]);
            }
            if($request->by == 'less') {
                $saskaitos = Saskaita::where('suma','>','%'.$request->search.'%')->get();
                return view('back.index', [
                'saskaitos' => $saskaitos,
                'search' => $request->search ?? '',
                'request'=> $request
            ]);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make(
            $request->all(),
            [
            'vardas' => 'required|alpha|min:3|max:20',
            'pavarde' => 'required|alpha|min:3|max:20',
            'ak' => 'required|min:11|max:11',
            ]);

            if ($validator->fails()) {
                $request->flash();
                return redirect()->back()->with('not', 'Neteisingai suvesti duomenys.');
            }
        $sas = New Saskaita;
        $sas->vardas = $request->vardas;
        $sas->pavarde = $request->pavarde;
        $sas->ak = $request->ak;
        $sas->suma = 0.00;
        $sas->s_nr = $request->s_nr;
        $sas->save();

        return redirect()->route('bank-index')->with('ok','Nauja sąskaita sukurta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saskaita  $saskaita
     * @return \Illuminate\Http\Response
     */
    public function show(Saskaita $saskaita)
    {
        return view('back.show', [
            'saskaita' => $saskaita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saskaita  $saskaita
     * @return \Illuminate\Http\Response
     */
    public function edit(Saskaita $saskaita)
    {
        return view('back.edit', ['saskaita' => $saskaita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Saskaita  $saskaita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saskaita $saskaita)
    {
        $validator = Validator::make(
            $request->all(),
            [
            'vardas' => 'required|alpha|min:3|max:20',
            'pavarde' => 'required|alpha|min:3|max:20',
            'ak' => 'required|min:11|max:11',
            ]);

            if ($validator->fails()) {
                $request->flash();
                return redirect()->back()->with('not', 'Neteisingai suvesti duomenys.');
            }
        $saskaita->vardas = $request->vardas;
        $saskaita->pavarde = $request->pavarde;
        $saskaita->ak = $request->ak;
        $saskaita->suma = $request->suma;
        $saskaita->s_nr = $request->s_nr;
        $saskaita->save();

        return redirect()->route('bank-show', $saskaita)->with('ok', 'Sąskaitos informacija atnaujinta.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saskaita  $saskaita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saskaita $saskaita)
    {
        if ($saskaita->suma > 0) {    
            return redirect()->route('bank-show', $saskaita)->with('not', 'Sąskaitos su lėšomis ištrinti negalima');
        }
        $saskaita->delete();
        return redirect()->route('bank-index')->with('ok','Sąskaita '.$saskaita->s_nr.' ištrinta.');
    }
    public function plus(Request $request, Saskaita $saskaita){

        if ($request->plus <= 0 || !is_numeric($request->plus)) {
            return redirect()->route('bank-show', $saskaita)->with('not','Galima pridėti tik teigiamą sumą.');
        }
        
        $saskaita->suma = $saskaita->suma + $request->plus;
        $saskaita->save();

        return redirect()->route('bank-show', $saskaita)->with('ok','Prie sąskaitos pridėta: '.round($request->plus,2).' €');
    }
    public function minus(Request $request, Saskaita $saskaita){
        if ($request->minus < 0 || !is_numeric($request->minus)) {
            return redirect()->route('bank-show', $saskaita)->with('not','Galima nurašyti tik teigiamą sumą.');
        }
        if ($saskaita->suma - $request->minus >= 0) {
            $saskaita->suma = $saskaita->suma - $request->minus;
            $saskaita->save();

            return redirect()->route('bank-show', $saskaita)->with('ok','Nuo sąskaitos nurašyta: '.round($request->minus, 2).' €');
        }

        return redirect()->route('bank-show', $saskaita)->with('not','Nepakankamas likutis.');;
    }
    public function home(){

        $saskaitos = Saskaita::all();
        return view('back.home', [
            'saskaitos' => $saskaitos
        ]);
    }
}
