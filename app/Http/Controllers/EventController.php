<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Province;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $events = Event::with('province')->get();
        return view('events.index', compact(('events')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all();
        return view('events.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEventRequest $request)
    {
        if($request->hasFile('image')){
            $data = $request->validated();
            $data ['image'] = Storage::putFile('events', $request->file('image'));
            $data ['admin_id'] = auth()->id();
            $data ['slug'] = Str::slug($request->title);

            Event::create($data);
            return to_route('events.index');
        }else{
            return back();
        }
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
