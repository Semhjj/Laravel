<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\MeeBezig;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class meeBezigController extends Controller
{
    public function index()
    {
        $mee_bezigData = MeeBezig::all();
        if ($mee_bezigData->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $mee_bezigData
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'Bericht' => 'Geen opdrachten gevonden in mee bezig.'
            ], 404);
        }
    }

    public function store(Request $request)
    {
//        $opdrachtKeuze = $request->opdrachtKeuze;
        $validated = Validator::make($request->all(), [
//            [ Rule::in('Riyan')]
            'opdrachtKeuze' => [Rule::in('mee_bezig')],
            'email' => 'required',
            'opdracht' => 'required',
            'opdracht_omschrijving' => 'required'
        ]);

        if ($validated->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validated->messages()
            ], 422);
        } else {
            $mee_bezig = MeeBezig::create([
                'opdrachtKeuze' => $request->opdrachtKeuze,
                'email' => $request->email,
                'opdracht' => $request->opdracht,
                'opdracht_omschrijving' => $request->opdracht_omschrijving
            ]);
        }

        if ($mee_bezig) {
            return response()->json([
                'status' => 200,
                'message' => 'Opdracht toegevoegd aan mee bezig.'
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Er is iets fout gegaan, probeer het opnieuw.'
            ], 500);
        }
    }

    public function show($id)
    {
        $mee_bezig = MeeBezig::find($id);
        if ($mee_bezig) {
            return response()->json([
                'status' => 200,
                'message' => $mee_bezig
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Geen opdrachten gevonden.'
            ], 404);
        }
    }

    public function edit($id)
    {
        $mee_bezig = MeeBezig::find($id);
        if ($mee_bezig) {
            return response()->json([
                'status' => 200,
                'message' => $mee_bezig
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Geen opdrachten gevonden.'
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validated = Validator::make($request->all(), [
            'opdrachtKeuze' => [Rule::in('mee_bezig')],
            'email' => 'required',
            'opdracht' => 'required',
            'opdracht_omschrijving' => 'required'
        ]);

        if ($validated->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validated->messages()
            ], 422);
        } else {
            $id = MeeBezig::find($id);

            if ($id) {
                $mee_bezig = MeeBezig::update([
                    'opdrachtKeuze' => $request->opdrachtKeuze,
                    'email' => $request->email,
                    'opdracht' => $request->opdracht,
                    'opdracht_omschrijving' => $request->opdracht_omschrijving
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => 'Opdracht mee bezig aangepast.'
                ], 200);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Er is iets fout gegaan.'
                ], 404);
            }

        }

    }
    public function destroy($id) {
        $meebezigDelte= MeeBezig::find($id);

        if($meebezigDelte) {
            $meebezigDelte->delete();
            return response()->json([
                'status' => 200,
                'message'=> 'Opdracht verwijderd uit mee bezig.'
            ], 200);
        }
        else {
            return response()->json([
                'status' => 404,
                'message'=> 'Geen opdracht gevonden.'
            ], 404);
        }
    }
}
