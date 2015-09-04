<?php

namespace App\Http\Middleware;

use Closure;

class ManageUserCookie
{

    public function handle($request, Closure $next)
    {
        // We set a cookie for the user
        if (!isset($_COOKIE['guest_id'])) {
            $guestId = md5(uniqid());
            setcookie('guest_id', $guestId, 0, '/');
        }

        return $next($request);
    }

}
