<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GuideRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $guides = Guide::paginate();

        return view('guide.index', compact('guides'))
            ->with('i', ($request->input('page', 1) - 1) * $guides->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $guide = new Guide();

        return view('guide.create', compact('guide'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuideRequest $request): RedirectResponse
    {
        Guide::create($request->validated());

        return Redirect::route('guides.index')
            ->with('success', 'Guide created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $guide = Guide::find($id);

        return view('guide.show', compact('guide'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $guide = Guide::find($id);

        return view('guide.edit', compact('guide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuideRequest $request, Guide $guide): RedirectResponse
    {
        $guide->update($request->validated());

        return Redirect::route('guides.index')
            ->with('success', 'Guide updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Guide::find($id)->delete();

        return Redirect::route('guides.index')
            ->with('success', 'Guide deleted successfully');
    }
}
