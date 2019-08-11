<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelsController extends Controller
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
        $hotels = Hotel::all();
        return view('hotels/index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels/create');
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
            'title'       => 'required|max:255',
            'star'        => 'required|numeric',
            'city'        => 'required|max:255',
            'address'     => 'required|max:255',
            'price'       => 'required|numeric',
            'description' => 'required|max:2048',
        ]);

        Hotel::create($data);

        return redirect('hotels')->with('success', 'Otel əlavə edildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $data = $request->validate([
            'title'       => 'required|max:255',
            'star'        => 'required|numeric',
            'city'        => 'required|max:255',
            'address'     => 'required|max:255',
            'price'       => 'required|numeric',
            'description' => 'required|max:2048',
        ]);

        $hotel->update($data);

        return redirect('hotels')->with('success', 'Dəyişikliklər yadda saxlanıldı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect('hotels')->with('success', 'Otel silindi!');
    }
}
