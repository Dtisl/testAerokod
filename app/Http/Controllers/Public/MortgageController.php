<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Mortgage;
use Illuminate\View\View;

class MortgageController extends Controller
{
    public function index(): View
    {
        $mortgages = Mortgage::where('is_active', true)->get();

        return view('public.index', compact('mortgages'));
    }

    public function show($id): View
    {
        $mortgage = Mortgage::findOrFail($id);

        return view('public.show', compact('mortgage'));
    }
}
