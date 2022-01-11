<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GrassRequest;
use App\Models\Grass;

class GrassController extends Controller
{
    public function getGrass(GrassRequest $request)
    {
        return response()->json(
            Grass::where('name', 'like', '%'.$request->search.'%')
            ->orWhere('properties', 'like', '%'.$request->search.'%')
            ->get()
        );
    }
}
