<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Country;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $countries = Country::all();
        $hotels = Hotel::all();
        $orders = Order::all();
        return View('back.orders.index', [
            'orders' => $orders,
            'countries' => $countries,
            'hotels' => $hotels,
            'users' => $users

    ]);
    }
    public function index2()
    {
        $countries = Country::all();
        $hotels = Hotel::all();
        $orders = Order::all();
        return View('front.orders.index', [
            'orders' => $orders,
            'countries' => $countries,
            'hotels' => $hotels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $order = new Order;
        $order->client_id = $request->client_id;
        $order->hotel_id = $request->hotel_id;
        $order->save();

        return redirect()->route('o-index2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('back.orders.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->confirmed = $request->confirmed ?? 0;
        $order->situation = $request->situation;
        $order->save();

        return redirect()->route('o-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function pdf(Order $order)
    {
        $hotels = Hotel::all();
        $pdf = Pdf::loadView('front.orders.pdf', ['order' => $order,
    'hotels' => $hotels]);
        return $pdf->download('hotel-o-'.$order->id.'.pdf');
    }
}
