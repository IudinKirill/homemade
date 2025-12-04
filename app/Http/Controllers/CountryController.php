<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request)
{
    $sort = $request->input('sort', 'top');
    $direction = $request->input('direction', 'desc');

    // Защита от неожиданных значений
    $sort = in_array($sort, ['top']) ? $sort : 'top';
    $direction = in_array($direction, ['asc', 'desc']) ? $direction : 'desc';

    $countries = Country::orderBy($sort, $direction)->paginate(15)->withQueryString();

    return view('country.index', compact('countries', 'sort', 'direction'));
}

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('country.index');
    }
}
