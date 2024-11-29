<?php

namespace App\Http\Controllers;

use App\Models\Expedition;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpeditionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpeditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $expeditions = Expedition::paginate();

        return view('expedition.index', compact('expeditions'))
            ->with('i', ($request->input('page', 1) - 1) * $expeditions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $expedition = new Expedition();

        return view('expedition.create', compact('expedition'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpeditionRequest $request): RedirectResponse
    {
        Expedition::create($request->validated());

        return Redirect::route('expeditions.index')
            ->with('success', 'Expedition created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expedition = Expedition::find($id);

        return view('expedition.show', compact('expedition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expedition = Expedition::find($id);

        return view('expedition.edit', compact('expedition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpeditionRequest $request, Expedition $expedition): RedirectResponse
    {
        $expedition->update($request->validated());

        return Redirect::route('expeditions.index')
            ->with('success', 'Expedition updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Expedition::find($id)->delete();

        return Redirect::route('expeditions.index')
            ->with('success', 'Expedition deleted successfully');
    }
}
