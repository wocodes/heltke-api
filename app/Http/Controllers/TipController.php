<?php

namespace App\Http\Controllers;

use App\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = Tip::all();
        return response()->json($tips);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storedTip = Tip::create([
            'category' => $request->category,
            'tip' => $request->tip,
        ]);

        if($storedTip)
            return response()->json($storedTip);
        else
            return response()->json(['error' => 'Error Creating Tip'], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function show(Tip $tip)
    {
        $daily_tip = Tip::where('active', 1)->first();
        return response()->json($daily_tip);
    }

}
