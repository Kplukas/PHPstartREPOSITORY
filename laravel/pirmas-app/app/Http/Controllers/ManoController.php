<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManoController extends Controller
{
    public function enter(Request $req, $id)
    {
        return 'Labas is kontrolerio Nr.: ' . $id . ' || Versija:' . $req->v;
    }
    public function showKint($number)
    {
        $kint = 'kint';
        return view('pirmas-test.one', ['number' => $number]);
    }
}
