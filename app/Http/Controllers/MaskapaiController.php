<?php

namespace App\Http\Controllers;

use App\Models\Maskapai;
use Illuminate\Http\Request;

class MaskapaiController extends Controller
{
    public function index(Request $request)
    {
        $maskapais = Maskapai::all();

        return view('maskapai.index', compact('maskapais'));
    }

    public function show(Request $request)
    {
        $maskapai = Maskapai::find($request->id);

        return view('maskapai.show', compact('maskapai'));
    }
}
