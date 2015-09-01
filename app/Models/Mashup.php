<?php

namespace App\Models;
use App\Lib\Functions;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concept;

class Mashup extends Model {

    /** GET **/
    public function getMashupByUrlKey($urlKey) {

        $mashup = self::where('url_key', '=', $urlKey)->first();
        if ($mashup)
            $mashup = $mashup->toArray();

        return $mashup;
    }

    public function getRandomMashupUrlKey() {

        $count = $this->count();
        if ($count == 0) return false;
        $randIndex = rand(0, $count-1);
        $mashup = $this->skip($randIndex)->take(1)->first()->toArray();

        return isset($mashup['url_key']) ? $mashup['url_key'] : false;
    }

    /** ADD **/
    public function addMashup($mashup) {

        $this->concept_1 = $mashup['concept_1'];
        $this->concept_2 = $mashup['concept_2'];
        $urlKey = $this->_generateUrlKey();
        $this->url_key = $urlKey;
        $this->mashup = $mashup['mashup'];
        $this->save();

        return array('valid' => true, 'url_key' => $urlKey);
    }

    private function _generateUrlKey() {

        $repeated = true;

        while ($repeated) {
            $urlKey = Functions::keyGenerator(6, 10, true, false, true);
            $previouslyUsedUrlKey = self::where('url_key', '=', $urlKey)->first();
            if (!$previouslyUsedUrlKey) {
                $repeated = false;
            }
        }

        return $urlKey;

    }

}
