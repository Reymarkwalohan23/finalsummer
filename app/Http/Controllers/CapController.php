<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cap;

class CapController extends Controller
{
    public function index() {
        $caps = Cap::get();
        return inertia('Cap', [
            'caps'=> $caps
        ]);
    }
    
}
