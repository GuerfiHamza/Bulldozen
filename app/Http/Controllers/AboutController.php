<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class AboutController extends Controller
{
    public function index()
    {
        $about = About::where('id', '=', '1')->first();
        return view('about')->with([
        'about' => $about]);;
    }
}
