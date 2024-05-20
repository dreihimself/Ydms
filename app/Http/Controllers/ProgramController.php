<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\program;

class ProgramController extends Controller
{
    public function program_entry(Request $request)
    {
        $validated = $request ->validate([
            'prog'=> 'required|string|max:255',
            'titl' => 'required|string|max:255',
        ]);
        try{
            $program = program::create($validated);
            return response()->json([
                'program_entry' => $program
            ],200);
        }catch (\Exception $e) {
            return response() ->json([
                'error' => 'Could not save data',
                'message' => $e->getMessage()
            ],500);
        }
    }
        public function getProgram()
        {
            try{
                $getprog = program::all();
                return response()->json($getprog, 200);
            }catch (\Exception $e){
                return response()->json([
                    'error' => 'Could not fetch data',
                    'message' => $e ->getMessage()
                ], 500);
            }
        }
}
