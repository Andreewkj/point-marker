<?php

namespace App\Http\Controllers;

use App\Markup;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $userId = Auth::id();
        
        $markups = DB::table('markups')->where('user_id',$userId)->get();

        return view('ponto.registro',['markups'=> $markups]);

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
        $current = explode(' ',$current->toDateTimeString());
        $currentDay = $current[0];
        $currentTime = $current[1];

        $userId = Auth::id();

        $markup = Markup::create(['user_id' => $userId, 'markupDay' => $currentDay,'markupTime' => $currentTime]);

        $currentTime = explode(':',$currentTime);
        $hour = $currentTime[0] . ':' . $currentTime[1];

        return redirect()->back()->with('message', 'Marcação do ponto realizada as '. $hour .'!');
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
