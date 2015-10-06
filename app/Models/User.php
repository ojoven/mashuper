<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class User extends Model {

    /** GET **/
    public static function isUserLogged() {

        return (Session::has('user')) ? Session::get('user') : false;
    }

    public static function getGuestId() {

        return (isset($_COOKIE['guest_id'])) ? $_COOKIE['guest_id'] : false;

    }


}
