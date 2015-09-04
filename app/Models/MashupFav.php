<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class MashupFav extends Model {

    /** GET **/
    public function getNumFavsMashup($mashupId) {

        //$numMashups = self::where('mashup_id', '=', $mashupId)->count();
        return 0;
        return $numMashups;
    }

    public function hasUserFavedMashup($mashupId) {



    }

    /** HANDLE **/
    public function handleMashupFav($params) {

        // Validation
        if (!$this->_validateMashupFav($params)) return array('valid'=>false);

        // User Management
        $params = $this->_parseUserFav($params);
        $params['previous'] = $this->_previousMashupFav($params);

        if ($params['fav']=="1") {
            $response = $this->_addMashupFav($params);
        } else {
            $response = $this->_removeMashupFav($params);
        }

        return $response;
    }

    /** ADD **/
    private function _addMashupFav($params) {

        // Previous Mashup
        if ($params['previous']) return array('valid'=>false);

        // Enter the
        $this->mashup_id = $params['mashup_id'];
        $this->user_id = (isset($params['user_id'])) ? $params['user_id'] : null;
        $this->guest_id = (isset($params['guest_id'])) ? $params['guest_id'] : null;
        $this->save();

        return array('valid' => true);

    }

    /** REMOVE **/
    private function _removeMashupFav($params) {

        if (!$params['previous']) return array('valid'=>false);
        self::where('id', '=', $params['previous']['id'])->delete();

        return array('valid' => true);
    }

    /** PRIVATE **/
    private function _validateMashupFav($params) {

        if (!isset($params['user_id']) && (!$params['guest_id'] || strlen($params['guest_id'])<32)) return false;

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

        if (isset($params['user_id'])) {
            $index = "user_id";
        } elseif (isset($params['guest_id'])) {
            $index = "guest_id";
        }

        $previous = self::where($index, '=', $params[$index])->first();

        return $previous;
    }


}
