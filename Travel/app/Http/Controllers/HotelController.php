<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        $countries = Country::all();
        return View('back.hotel.index', [
            'hotels' => $hotels,
            'countries' => $countries
        ]);
    }
    public function index2(Request $request)
    {
        if(!$request->filter || $request->filter == 'all') {
            if(!$request->search){
                $hotels = Hotel::all();
                $countries = Country::all();
                return View('front.hotel.index', [
                    'hotels' => $hotels,
                    'countries' => $countries,
                    'request' => $request
                ]);
            } else {
                $hotels = Hotel::where('name', 'like', $request->search)->get();
                $countries = Country::all();
                return View('front.hotel.index', [
                    'hotels' => $hotels,
                    'countries' => $countries,
                    'request' => $request
                ]);
            }
            
        }
        $countries = Country::all();
        foreach($countries as $country) {
            if($request->filter == $country->id){
                if(!$request->search){
                    $countries = Country::all();
                    $hotels = Hotel::where('c_id', 'like', $country->id)->get();
                    return View('front.hotel.index', [
                        'hotels' => $hotels,
                        'countries' => $countries,
                        'request' => $request
                    ]);
                } else {
                    $countries = Country::all();
                    $hotels = Hotel::select()->where('c_id', 'like', $country->id)->where('name', 'like', '%'.$request->search.'%')->get();
                    return View('front.hotel.index', [
                        'hotels' => $hotels,
                        'countries' => $countries,
                        'request' => $request
                    ]);
                }
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
        $country = Country::all();
        return View('back.hotel.create', [
            'country' => $country
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHotelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelRequest $request)
    {
        $hotel = New Hotel;
        if($request->file('photo')) {
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $name = pathInfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name. '-' . rand(100000,999999). $ext;
            $photo->move(public_path().'/img', $file);
            $hotel->photo = '/img'. '/'. $file;
        }
        $hotel->name = $request->name;
        $hotel->price = $request->price;
        $hotel->visit_start = $request->visit_start;
        $hotel->visit_end = $request->visit_end;
        $hotel->c_id = $request->cid;
        $hotel->save();

        return redirect()->route('h-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        $countries = Country::all();
        return view('back.hotel.edit', [
            'hotel' => $hotel,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHotelRequest  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHotelRequest $request, Hotel $hotel)
    {
        $hotel->name = $request->name;
        $hotel->price = $request->price;
        $hotel->visit_start = $request->visit_start;
        $hotel->visit_end = $request->visit_end;
        $hotel->c_id = $request->cid;
        $hotel->photo = $request->photo;
        $hotel->save();

        return redirect()->route('h-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('h-index');
    }
}
