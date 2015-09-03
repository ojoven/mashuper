<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /** GET **/
    public static function isUserLogged() {

        // TODO
        return false;
    }

    public static function getGuestId() {

        return (isset($_COOKIE['guest_id'])) ? $_COOKIE['guest_id'] : false;

    }


}
