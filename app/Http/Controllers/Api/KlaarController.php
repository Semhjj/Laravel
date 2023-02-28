<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Klaar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class KlaarController extends Controller
{
    public function index()
    {
        $klaar = Klaar::all();
        if ($klaar->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $klaar
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'Bericht' => 'Geen opdrachten gevonden in klaar.'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'opdrachtKeuze' => [Rule::in('klaar')],
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
            $klaar = Klaar::create([
                'opdrachtKeuze' => $request->opdrachtKeuze,
                'email' => $request->email,
                'opdracht' => $request->opdracht,
                'opdracht_omschrijving' => $request->opdracht_omschrijving
            ]);
        }

        if ($klaar) {
            return response()->json([
                'status' => 200,
                'message' => 'Opdracht toegevoegd.'
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
        $klaar = Klaar::find($id);
        if ($klaar) {
            return response()->json([
                'status' => 200,
                'message' => $klaar
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Geen opdrachten gevonden.'
            ], 404);
        }
    }

    public function edit($id) {
        $klaar = Klaar::find($id);
        if($klaar) {
            return response()->json([
                'status' => 200,
                'message' => $klaar
            ], 200);
        }
        else {
            return response()->json([
                'status' => 404,
                'message' => 'Geen opdrachten gevonden.'
            ], 404);
        }
    }

    public function update(Request $request, int $id) {
        $validated = Validator::make($request->all(), [
            'opdrachtKeuze' => [Rule::in('klaar')],
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
            $id = Klaar::find($id);

            if ($id) {
                $mee_bezig = Klaar::update([
                    'opdrachtKeuze' => $request->opdrachtKeuze,
                    'email' => $request->email,
                    'opdracht' => $request->opdracht,
                    'opdracht_omschrijving' => $request->opdracht_omschrijving
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => 'Opdracht is aangepast.'
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
        $klaar = Klaar::find($id);

        if($klaar) {
            $klaar->delete();
            return response()->json([
                'status' => 200,
                'message'=> 'Opdracht verwijderd.'
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
