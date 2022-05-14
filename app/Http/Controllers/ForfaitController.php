<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
    public function get()
    {
        return response()->json(Forfait::all());
    }

    public function store(Request $request)
    {
        $forfait = new Forfait();
        $forfait->forfait_name = $request->input('forfait_name');
        $forfait->typeData = $request->input('typeData');
        $forfait->limiteMax = $request->input('limiteMax');
        $forfait->price = $request->input('price');
        $forfait->emplacement = $request->input('emplacement');
        $forfait->duration = $request->input('duration');
        $forfait->extension = $request->input('extension');
        $forfait->priceUnit = $request->input('priceUnit');
        $forfait->save();

        return response()->json($forfait);
    }
}
