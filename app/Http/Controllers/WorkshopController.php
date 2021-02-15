<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = new Workshop();
        $workshops = Workshop::all();
        return view('painel.workshop.index')->with(['workshops' => $workshops]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('painel.workshop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Workshop::create($request->all());
        return redirect()->route('workshop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop = Workshop::findOrFail($id);
        return view('painel.workshop.edit')->with(['workshop' => $workshop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $workshop = Workshop::find($id);

        $workshop->save();
        ddd($workshop);
        return redirect()->route('workshop.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshop = Workshop::find($id);
        $workshop->delete();
        return redirect()->route('workshop.index');



    }
}
