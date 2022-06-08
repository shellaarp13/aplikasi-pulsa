<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pulsa;

class PulsaController extends Controller
{
    public function index()
    {
        $pulsas = Pulsa::all();
        return response()->json($pulsas);
    }

    public function store(Request $request)
    {
        $pulsa = new Pulsa;
        $pulsa->provider = $request->provider;
        $pulsa->nominal = $request->nominal;
        $pulsa->no_hp = $request->no_hp;
        $pulsa->save();
        return response()->json([
            "message" => "Pulsa Added."
        ], 201);
    }

    public function show($id)
    {
        $pulsa = Pulsa::find($id);
        if(!empty($pulsa))
        {
            return response()->json($pulsa);
        }
        else
        {
            return response()->json([
                "message" => "Pulsa not found"
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        if (Pulsa::where('id', $id)->exists()) {
            $pulsa = Pulsa::find($id);
            $pulsa->provider = is_null($request->provider) ? $pulsa->provider : $request->provider;
            $pulsa->nominal = is_null($request->nominal) ? $pulsa->nominal : $request->nominal;
            $pulsa->no_hp = is_null($request->no_hp) ? $pulsa->no_hp : $request->no_hp;
            $pulsa->save();
            return response()->json([
                "message" => "Pulsa Updated."
            ], 404);
        }else{
            return response()->json([
                "message" => "Pulsa Not Found."
            ], 404);
        }
    }

    public function destroy($id)
    {
        if(Pulsa::where('id', $id)->exists()) {
            $pulsa = Pulsa::find($id);
            $pulsa->delete();

            return response()->json([
              "message" => "records deleted."
            ], 202);
        } else {
            return response()->json([
              "message" => "pulsa not found."
            ], 404);
        }
    }
}
