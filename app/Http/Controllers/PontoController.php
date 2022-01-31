<?php

namespace App\Http\Controllers;

use App\Markup;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PontoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $current = Carbon::now('America/Sao_Paulo');
        $current = explode(' ',$current->toDateTimeString());
        $currentTime = explode(':', $current[1]);
        $currentTime = $currentTime[0] .':'. $currentTime[1];
        $currentDate = $current[0];

        return view('ponto.registro',['time'=>$currentTime,'date'=> $currentDate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $current = Carbon::now('America/Sao_Paulo');
        $currentTime = $current->toDateTimeString();

        $userId = Auth::id();

        $markup = Markup::create(['user_id' => $userId, 'markup' => $currentTime]);

        return redirect()->back()->with('message', 'Marcação do ponto realizada as '. $currentTime .'!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
