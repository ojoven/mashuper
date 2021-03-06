<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Concept extends Model {

    /** GET **/
    public function getAllConcepts() {

        $concepts = self::orderBy('updated_at','desc')->get()->toArray();

        return $concepts;
    }

    public function getTwoRandomConcepts() {

        $count = $this->count();
        if ($count == 0) return false;
        $randIndex = rand(0, $count-2);
        $concepts = $this->skip($randIndex)->take(2)->get()->toArray();

        return $concepts;

    }

    /** ADD **/
    public function addConcept($concept) {

        // Won't duplicate
        $previous = self::where('concept', '=', $concept)->first();
        if ($previous) return array('valid' => false);

        $this->concept = $concept;
        $this->save();

        return array('valid' => true, 'concept' => $concept);
    }


}
