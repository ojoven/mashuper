<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Models\Concept;

class IndexController extends Controller {

    public function index() {

        $conceptModel = new Concept();
        $data['concepts'] = $conceptModel->getTwoRandomConcepts();

        return view('index', $data);

    }

}
