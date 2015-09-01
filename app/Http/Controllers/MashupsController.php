<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

// Models
#use App\Models\Card;

class MashupsController extends Controller {

    public function getCreate() {

        return view('mashups.create');

    }

    public function getView() {

        return view('mashups.view');

    }

}
