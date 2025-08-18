<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IeWarningController extends Controller
{
    public $redirectUrl;
    
    public function index(Request $request) {

      if (!$request->session()->get("ie_warning")) {
        $request->session()->push("ie_warning", true);
      }

      return view('ie_warning', ['redirectUrl' => $request->session()->get("ie_warning_url")]);
    }
}
