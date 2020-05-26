<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{

    public function handle($request, Closure $next)
    {
        $user = $request->user ();

        if ($user && $user->admin) {
            return $next($request);
        }

        return redirect ()->route ('home');
    }
}
