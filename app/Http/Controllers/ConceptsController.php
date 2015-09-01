<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Models\Concept;

class ConceptsController extends Controller {

    public function index() {

        $conceptModel = new Concept();
        $concepts = $conceptModel->getAllConcepts();
        $data['concepts'] = $concepts;
        return view('concepts.view', $data);

    }

    public function postAdd(Request $request) {

        $concept = $request->input('concept');

        $conceptModel = new Concept();
        $response = $conceptModel->addConcept($concept);

        return response()->json($response);
    }

    public function loadAction() {

        $conceptModel = new Default_Model_Concept();
        $concepts = $conceptModel->getTwoRandomConcepts();
        $data['concept1'] = $concepts[0]['concept'];
        $data['concept2'] = $concepts[1]['concept'];
        echo json_encode($data);
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
    }

}
