<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

// Models
#use App\Models\Card;

class ConceptsController extends Controller {

    public function index() {

        return view('concepts.view');

    }

}