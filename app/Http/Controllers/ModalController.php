<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function showModal()
    {
        return view('modal');
    }
}
