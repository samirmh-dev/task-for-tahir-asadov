<?php

namespace App\Http\Controllers;

use App\App;
use App\Flight;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function show(App $app)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function edit(App $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, App $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy(App $app)
    {
        //
    }

    public function flights_result(){
        $conditions = array();

        if(Input::get('from') != ''){
            $conditions[] = ['from', '=', Input::get('from')];
        }
        if(Input::get('to') != ''){
            $conditions[] = ['to', '=', Input::get('to')];
        }

        $flights = Flight::where($conditions)->paginate(5);

        $params= array(
            'from' => Input::get('from'),
            'to' => Input::get('to'),
            'departure' => Input::get('departure'),
            'return' => Input::get('return'),
            'adults' => Input::get('adults'),
        );
        $flights->withPath('/flights/result?' . http_build_query($params));
        return view('flights.result', compact('flights'));
    }

    public function hotels_result(){
        $conditions = array();

        if(Input::get('city') != ''){
            $conditions[] = ['city', '=', Input::get('city')];
        }

        $hotels = Hotel::where($conditions)->paginate(5);
        
        $params= array(
            'city' => Input::get('city'),
            'departure' => Input::get('departure'),
            'departure' => Input::get('departure'),
            'return' => Input::get('return'),
            'rooms' => Input::get('rooms'),
        );
        $hotels->withPath('/hotels/result?' . http_build_query($params));
        return view('hotels.result', compact('hotels'));
    }

}
