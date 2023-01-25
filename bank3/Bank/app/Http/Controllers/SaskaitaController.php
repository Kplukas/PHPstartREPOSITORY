<?php

namespace App\Http\Controllers;

use App\Models\Saskaita;
use Illuminate\Http\Request;

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
    public function index()
    {
        $saskaitos = Saskaita::all()->sortBy('pavarde');
        return view('back.index', [
            'saskaitos' => $saskaitos
        ]);
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
        $sas = New Saskaita;
        $sas->vardas = $request->vardas;
        $sas->pavarde = $request->pavarde;
        $sas->ak = $request->ak;
        $sas->suma = 0.00;
        $sas->s_nr = $request->s_nr;
        $sas->save();

        return redirect()->route('bank-index');
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
        $saskaita->vardas = $request->vardas;
        $saskaita->pavarde = $request->pavarde;
        $saskaita->ak = $request->ak;
        $saskaita->suma = $request->suma;
        $saskaita->s_nr = $request->s_nr;
        $saskaita->save();

        return redirect()->route('bank-show', $saskaita);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saskaita  $saskaita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saskaita $saskaita)
    {
        $saskaita->delete();
        return redirect()->route('bank-index');
    }
    public function plus(Request $request, Saskaita $saskaita){
        
        $saskaita->suma = $saskaita->suma + $request->plus;
        $saskaita->save();

        return redirect()->route('bank-show', $saskaita);
    }
    public function minus(Request $request, Saskaita $saskaita){
        if ($request->minus < 0) {
            return redirect()->route('bank-show', $saskaita);
        }
        if ($saskaita->suma - $request->minus > 0) {
            $saskaita->suma = $saskaita->suma - $request->minus;
            $saskaita->save();

            return redirect()->route('bank-show', $saskaita);
        }

        return redirect()->route('bank-show', $saskaita);
    }
    public function home(){

        $saskaitos = Saskaita::all();
        return view('back.home', [
            'saskaitos' => $saskaitos
        ]);
    }
}
