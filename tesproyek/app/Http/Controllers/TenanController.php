<?php

namespace App\Http\Controllers;

use App\Models\Tenan;
use Illuminate\Http\Request;

class TenanController extends Controller
{
    /**
     * Menampilkan daftar tenan.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tenans = Tenan::all();
        return view('tenan.index', compact('tenans'));
    }
}
