<?php

namespace App\Http\Controllers;

use App\Models\activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activity(Request $request){
        $validated = $request->validate([
            'activity' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'date' => 'required|date_format:Y-m-d',
            'venue' => 'required|string|max:255',
            'facilitator' => 'required|string|max:255',
            'costoftraining' => 'required|integer',
            'status' => 'required|string|max:255',
        ]);

        try {
            $activity = activity::create($validated);
            return response()->json([
                'activities' => $activity
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Could not save data',
                'message' => $e->getMessage()
            ], 500);
        }
    
    }

    public function getActivity(){
        try{
            $activity= activity::all();
            return response()->json($activity,200);
        } catch(\Exception $e){
            return response()->json([
                'error' => 'Could not fetch Data',
                'message' => $e->getMessage()
            ],500);
        }
    }
}
