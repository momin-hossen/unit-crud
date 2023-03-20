<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = unit::all();
        return view('units.index', compact('units'));
    }

    public function create()
    {
        return view('units.create');
    }

    public function store(Request $request)
    {
        $unit = new Unit();
        $unit->name = $request->name;
        $unit->status = $request->status;
        $unit->description = $request->description;
        $unit->save();

        return back();
    }

    public function delete($id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        return back();
    }
}
