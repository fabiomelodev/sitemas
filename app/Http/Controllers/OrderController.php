<?php

namespace App\Http\Controllers;

use App\Models\Niche;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug, Order $order)
    {
        $niche = Niche::where('slug', $slug)->first();

        return view('pages.order.create', [
            'niche' => $niche,
            'order' => $order
        ]);
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

    public function checkout($slug, Order $order)
    {
        $niche = Niche::where('slug', $slug)->first();

        return view('pages.order.checkout', [
            'niche' => $niche,
            'order' => $order
        ]);
    }
}
