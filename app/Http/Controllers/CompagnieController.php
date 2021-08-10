<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use Illuminate\Http\Request;

class CompagnieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagnies = Compagnie::all();
        return view('compagnie',compact('compagnies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Compagnie;
        $store->name = $request->name;
        $store->adress = $request->adress;
        $store->phone = $request->phone;
        $store->mail= $request->mail;
        $store->contactname = $request->contactname;
        $store->contactlastname = $request->contactlastname;
        $store->img= $request->img;
        $store->save();
        return redirect('/compagnie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compagnie  $compagnie
     * @return \Illuminate\Http\Response
     */
    public function show(Compagnie $compagnie)
    {
        $show=$compagnie;
        return view('pages.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compagnie  $compagnie
     * @return \Illuminate\Http\Response
     */
    public function edit(Compagnie $compagnie)
    {
        $edit=$compagnie;
        return view('pages.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compagnie  $compagnie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compagnie $compagnie)
    {
        $update = $compagnie;
        $update->name = $request->name;
        $update->adress = $request->adress;
        $update->phone = $request->phone;
        $update->mail= $request->mail;
        $update->contactname = $request->contactname;
        $update->contactlastname = $request->contactlastname;
        $update->img= $request->img;
        $update->save();
        return redirect('/compagnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compagnie  $compagnie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compagnie $compagnie)
    {
        $compagnie->delete();
        return redirect()->back();
    }
}
