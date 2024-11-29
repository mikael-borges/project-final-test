<?php

namespace App\Http\Controllers;

use App\Models\Explorer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExplorerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExplorerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $explorers = Explorer::paginate();

        return view('explorer.index', compact('explorers'))
            ->with('i', ($request->input('page', 1) - 1) * $explorers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $explorer = new Explorer();

        return view('explorer.create', compact('explorer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExplorerRequest $request): RedirectResponse
    {
        Explorer::create($request->validated());

        return Redirect::route('explorers.index')
            ->with('success', 'Explorer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $explorer = Explorer::find($id);

        return view('explorer.show', compact('explorer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $explorer = Explorer::find($id);

        return view('explorer.edit', compact('explorer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExplorerRequest $request, Explorer $explorer): RedirectResponse
    {
        $explorer->update($request->validated());

        return Redirect::route('explorers.index')
            ->with('success', 'Explorer updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Explorer::find($id)->delete();

        return Redirect::route('explorers.index')
            ->with('success', 'Explorer deleted successfully');
    }
}
