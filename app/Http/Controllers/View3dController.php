<?php

namespace App\Http\Controllers;

use App\Models\View3d;
use Illuminate\Http\Request;

class View3dController extends Controller
{
    public function index(Request $request)
    {
        $items = View3d::all();

        return view('view3d.index', compact('items'));
    }
}
