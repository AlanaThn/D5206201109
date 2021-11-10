<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showETS() {
        //source buat data proses atau business yang di load
        return view('ets');
    }

    function showGreetings() {
        //source buat data proses atau business yang di load
        return view('showgreetings');
    }

    function sayHi(Request $request) {
        //source buat data proses atau business yang di load
        return view('tugas');
    }
}
