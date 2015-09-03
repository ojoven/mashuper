<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class MashupFav extends Model {

    /** GET **/
    public function getNumFavsMashup($mashupId) {

        $numMashups = self::where('mashup_id', '=', $mashupId)->count();

        return $numMashups;
    }

    /** ADD **/
    public function addMashupFav($params) {

        // User Management
        $params = $this->_parseUserFav($params);

        // Validation
        if (!$this->_validateMashupFav($params)) return array('valid'=>false);

        // Previous Mashup
        if ($this->_previousMashupFav($params)) return array('valid'=>false);

        // Enter the
        $this->mashup_id = $params['mashup_id'];
        $this->user_id = $params['user_id'];
        $this->guest_id = $params['guest_id'];
        //$this->save();

        return array('valid' => true);
    }

    /** PRIVATE **/
    private function _validateMashupFav($params) {

        if (!isset($params['user_id']) && (strlen($params['guest_id']))) return false;

        $valid = true;
        return $valid;

    }

    private function _parseUserFav($params) {

        if ($userId = User::isUserLogged()) {
            $params['user_id'] = $userId;
        } else {
            $params['guest_id'] = User::getGuestId();
        }

        return $params;

    }

    private function _previousMashupFav($params) {

        $previous = false;
        return $previous;
    }


}
