<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;

class FlightsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $flights = Flight::all();
        return view('flights/index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flights/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'company'     => 'required|max:255' ,
            'plane'       => 'required|max:255' ,
            'arrival'     => 'required|date'    ,
            'price'       => 'required|numeric' ,
            'from'        => 'required|max:255' ,
            'to'          => 'required|max:255' ,
            'passenger'   => 'required|numeric' ,
            'description' => 'required|max:2048',
        ]);

        Flight::create($data);

        return redirect('flights')->with('success', 'Uçuş əlavə edildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        return view('flights.edit', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        
        $data = $request->validate([
            'company'     => 'required|max:255' ,
            'plane'       => 'required|max:255' ,
            'arrival'     => 'required|date'    ,
            'price'       => 'required|numeric' ,
            'from'        => 'required|max:255' ,
            'to'          => 'required|max:255' ,
            'passenger'   => 'required|numeric' ,
            'description' => 'required|max:2048',
        ]);

        $flight->update($data);

        return redirect('flights')->with('success', 'Dəyişikliklər yadda saxlanıldı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect('flights')->with('success', 'Uçuş silindi!');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    
}
