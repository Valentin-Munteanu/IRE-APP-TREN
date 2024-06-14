<?php

namespace App\Http\Controllers;

use App\Models\Biletes;
use App\Models\Routes;
use Illuminate\Http\Request;
class SearchController extends Controller
{  public function show(Request $request)
    {
        return view('pages.searchResult', compact('bilet'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $search2 = $request->input('search2');

        $searchPerformed = $search && $search2;

        if (!$searchPerformed) {
            return redirect()->back()->with('message', 'Vă rugăm să selectați destinația.');
        }

        $queryBuilder = Routes::query();

        if ($search && $search2) {
            $queryBuilder->where('station_start', 'like', "%{$search}%")
                         ->where('destination', 'like', "%{$search2}%");
        }

        $results = $queryBuilder->get();

        return view('pages.searchResult', compact('results', 'searchPerformed'));
    }
}
