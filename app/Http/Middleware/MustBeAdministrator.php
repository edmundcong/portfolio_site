<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->user(); // if signed in will get that user, otherwise null

        // irl you would use $user->isAdmin for n admins
        if ($user && $user->name == 'EdmundAdministrator') {
            return $next($request);
        }

        abort(404, 'No way.');

    }
}
