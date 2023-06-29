<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {
        $trains = Train::where('orario_di_partenza', 'LIKE', '2023-06-29'.'%')->get();

        return view('welcome', compact('trains'));
    }
}
