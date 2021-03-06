<?php

namespace App\Http\Controllers;

use App\Models\MashupFav;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Models\Mashup;
use App\Models\Concept;

class MashupsController extends Controller {

    public function getCreate() {

        $conceptModel = new Concept();
        $data['concepts'] = $conceptModel->getTwoRandomConcepts();

        return view('mashups.create', $data);
    }

    public function view($urlKey) {

        $mashupModel = new Mashup();

        // Get mashup
        $mashup = $mashupModel->getMashupByUrlKey($urlKey);
        if (!$mashup) abort(404);
        $data['mashup'] = $mashup;

        return view('mashups.view', $data);

    }

    public function getRandom() {

        $mashupModel = new Mashup();

        // Get random mashup
        $urlKey = $mashupModel->getRandomMashupUrlKey();
        if (!$urlKey) abort(404);

        return redirect()->to('mashups/view/' . $urlKey);

    }

    public function postAdd(Request $request) {

        $mashup = $request->input();

        $mashupModel = new Mashup();
        $response = $mashupModel->addMashup($mashup);

        if (!$response['valid']) abort(404);
        return redirect()->to('mashups/view/' . $response['url_key']);
    }

    public function postFav(Request $request) {

        $mashupFav = $request->input();

        $mashupFavModel = new MashupFav();
        $response = $mashupFavModel->handleMashupFav($mashupFav);

        return response()->json($response);

    }

}
