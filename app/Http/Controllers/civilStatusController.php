<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\civilstatus;

class civilStatusController extends Controller
{
    public function civil_status(Request $request)
    {
        $validated = $request->validate([
            'civilstatus' => 'required|string|max:255',
            'optionstatus' => 'required|string|max:255',

        ]);

        try {
            $civilstatus = civilstatus::create($validated);
            return response()->json([
                'civil_status' => $civilstatus
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Could not save data',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}