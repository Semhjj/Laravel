<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\nogEenKeerNaarKijken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class nog_een_keer_naar_kijkenController extends Controller
{
    public function index()
    {
        $nogKijken = nogEenKeerNaarKijken::all();
        if ($nogKijken->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $nogKijken
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'Bericht' => 'Geen opdrachten gevonden.'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'opdrachtKeuze' => [Rule::in('nog_even_naar_kijken')],
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
            $to_do = nogEenKeerNaarKijken::create([
                'opdrachtKeuze' => $request->opdrachtKeuze,
                'email' => $request->email,
                'opdracht' => $request->opdracht,
                'opdracht_omschrijving' => $request->opdracht_omschrijving
            ]);
        }

        if ($to_do) {
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
        $nogKijken = nogEenKeerNaarKijken::find($id);
        if ($nogKijken) {
            return response()->json([
                'status' => 200,
                'message' => $nogKijken
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Geen opdrachten gevonden.'
            ], 404);
        }
    }

    public function edit($id) {
        $nogKijken = nogEenKeerNaarKijken::find($id);
        if($nogKijken) {
            return response()->json([
                'status' => 200,
                'message' => $nogKijken
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
            'opdrachtKeuze' => [Rule::in('nog_een_keer_naar_kijken')],
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
            $id = nogEenKeerNaarKijken::find($id);

            if ($id) {
                $mee_bezig = nogEenKeerNaarKijken::update([
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
        $nogKijken = nogEenKeerNaarKijken::find($id);
        if($nogKijken) {
            $nogKijken->delete();
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
