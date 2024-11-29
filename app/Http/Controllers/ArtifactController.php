<?php

namespace App\Http\Controllers;

use App\Models\Artifact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ArtifactRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArtifactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $artifacts = Artifact::paginate();

        return view('artifact.index', compact('artifacts'))
            ->with('i', ($request->input('page', 1) - 1) * $artifacts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $artifact = new Artifact();

        return view('artifact.create', compact('artifact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtifactRequest $request): RedirectResponse
    {
        Artifact::create($request->validated());

        return Redirect::route('artifacts.index')
            ->with('success', 'Artifact created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $artifact = Artifact::find($id);

        return view('artifact.show', compact('artifact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $artifact = Artifact::find($id);

        return view('artifact.edit', compact('artifact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtifactRequest $request, Artifact $artifact): RedirectResponse
    {
        $artifact->update($request->validated());

        return Redirect::route('artifacts.index')
            ->with('success', 'Artifact updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Artifact::find($id)->delete();

        return Redirect::route('artifacts.index')
            ->with('success', 'Artifact deleted successfully');
    }
}
