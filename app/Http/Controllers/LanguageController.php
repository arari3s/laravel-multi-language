<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function create()
    {
        return view('language.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required'],
            ]
        );

        // Session:: put ('locale', $request->name);
        session(['locale' => $request->name]);
        return back();
    }
}
