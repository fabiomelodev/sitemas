<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Faq;
use App\Models\Niche;
use App\Models\Order;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NicheController extends Controller
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
    public function show(Niche $niche)
    {
        $plans = $niche->plans()->get();

        $templates = $niche->templates()->get();

        $faqs = Faq::all();

        return view('pages.single-niche', [
            'niche'     => $niche,
            'plans'     => $plans,
            'templates' => $templates,
            'faqs'      => $faqs
        ]);
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

    public function process(Niche $niche)
    {
        $order = Order::create([
            'uuid' => Str::uuid()->toString(),
        ]);

        return redirect()->route('order.create', [
            'niche' => $niche,
            'order' => $order
        ]);
    }
}
