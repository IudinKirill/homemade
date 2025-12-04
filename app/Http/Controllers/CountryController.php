<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request)
{
    $query = Country::query();

    // Поиск по названию или коду
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where('name', 'like', "%{$search}%")
              ->orWhere('code', 'like', "%{$search}%");
    }

    $query->orderBy('top', 'desc');

    $countries = $query->get();

    return view('country', compact('countries'));
}
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('country.index');
    }
}
