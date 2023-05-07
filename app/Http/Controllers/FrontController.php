<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    private function loadview($view, $data=null){
        return view('/'.$view, $data);
    }

    // ------------------------- Faqs ------------------------------
    public function index() {
        $data['title'] = "Dashboard";
        return $this->loadview('index', $data);
    }
}
