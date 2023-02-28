<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class toDoController extends Controller
{
    public function index() {
        $to_doData = ToDo::all();
        if($to_doData->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $to_doData
            ], 200);
        }
        else {
            return response()->json([
                'status' => 404,
                'Bericht' => 'Geen opdrachten gevonden.'
            ], 404);
        }
    }

    public function store(Request $request) {
        $validated = Validator::make($request->all(), [
            'opdrachtKeuze' => [Rule::in('to_do')],
            'email' => 'required',
            'opdracht' => 'required',
            'opdracht_omschrijving' => 'required'
        ]);

        if($validated->fails()) {
            return response()->json([
                'status' =>  422,
                'error' => $validated->messages()
            ], 422);
        }
        else {
            $to_do = ToDo::create([
                'opdrachtKeuze' => $request->opdrachtKeuze,
                'email' => $request->email,
                'opdracht' => $request->opdracht,
                'opdracht_omschrijving' => $request->opdracht_omschrijving
            ]);
        }

        if($to_do) {
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

    public function show($id) {
        $to_do = ToDo::find($id);
        if($to_do) {
            return response()->json([
                'status' => 200,
                'message' => $to_do
            ], 200);
        }
        else {
            return response()->json([
                'status' => 404,
                'message' => 'Geen opdrachten gevonden.'
            ], 404);
        }
    }

    public function edit($id) {
        $to_do = ToDo::find($id);
        if($to_do) {
            return response()->json([
                'status' => 200,
                'message' => $mee_bezig
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
            'opdrachtKeuze' => [Rule::in('to_do')],
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
            $id = ToDo::find($id);

            if ($id) {
                $mee_bezig = ToDo::update([
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
        $to_do = ToDo::find($id);

        if($to_do) {
            $to_do->delete();
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
