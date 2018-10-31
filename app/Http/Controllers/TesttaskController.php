<?php

namespace App\Http\Controllers;

use App\Testtask;
use Illuminate\Http\Request;

class TesttaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $testtask = Testtask::all();
        return view('testtasks',['testtasks' => $testtask]);
        
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
        
        $testtask = new Testtask;
        $testtask->name = request('name');
        $testtask->save();
        return redirect('/testtasks');
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testtask  $testtask
     * @return \Illuminate\Http\Response
     */
    public function show(Testtask $testtask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testtask  $testtask
     * @return \Illuminate\Http\Response
     */
    public function edit(Testtask $testtask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testtask  $testtask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testtask $testtask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testtask  $testtask
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id, Testtask $testtask)
    {
        //
        $testtask =Testtask::find($id);
        $testtask->delete();
        return redirect('/testtasks');

        
        
        
    }
}
