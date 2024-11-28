<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MortgageRequest;
use App\Models\Mortgage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MortgageController extends Controller
{
    public function index(): View
    {
        $mortgages = Mortgage::all();

        return view('admin.index', compact('mortgages'));
    }

    public function create(): View
    {
        return view('admin.create');
    }

    public function store(MortgageRequest $request): RedirectResponse
    {
        $mortgage = Mortgage::create($request->validated());

        return redirect()->route('mortgages.index')->with('success', 'Ипотека успешно добавлена!');
    }

    public function show(string $id): View
    {
        $mortgage = Mortgage::findOrFail($id);

        return view('admin.show', compact('mortgage'));
    }

    public function edit(string $id): View
    {
        $mortgage = Mortgage::findOrFail($id);

        return view('admin.edit', compact('mortgage'));
    }

    public function update(MortgageRequest $request, string $id): RedirectResponse
    {
        $mortgage = Mortgage::findOrFail($id);
        $mortgage->update($request->validated());

        return redirect()->route('mortgages.index')->with('success', 'Ипотека успешно обновлена!');
    }

    public function destroy(string $id): RedirectResponse
    {
        $mortgage = Mortgage::findOrFail($id);
        $mortgage->delete();

        return redirect()->route('mortgages.index')->with('success', 'Ипотека успешно удалена!');

    }
}
