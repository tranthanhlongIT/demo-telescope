<?php

namespace App\Http\Middleware;

class TelescopeAuthorize
{
    public function handle($request, $next)
    {
        $role = $request->session()->all();
        return $role["admin_is_superadmin"] == 1 ? $next($request) : abort(403);
    }
}
