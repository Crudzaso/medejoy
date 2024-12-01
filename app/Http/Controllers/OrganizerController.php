<?php

namespace App\Http\Controllers;

use App\Models\Raffle;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

      public function dashboard()
    {

        $organizerId= auth()->id();

        
        $totalSales = Raffle::where('organizer_id', $organizerId)->sum('collected');

        $rafflesActive = Raffle::where('organizer_id', $organizerId)->where('status','active')->count();

        $ticketsSold = Raffle::where('organizer_id',$organizerId)->sum('tickets_sold');

        $rafflesDetails = Raffle::where('organizer_id', $organizerId)->select('title', 'tickets_sold', 'collected', 'status')->get();

        // Lógica para cargar datos del dashboard (ejemplo: estadísticas)
        return view('panelOrganizer.dashboard',compact('totalSales','rafflesActive','ticketsSold','rafflesDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
