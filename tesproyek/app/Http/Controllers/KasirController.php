<?php

namespace App\Http\Controllers;
use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
/**
     * Menampilkan data kasir.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $kasirs = Kasir::all();
        return view('kasir.index', compact('kasirs'));
    }
}
