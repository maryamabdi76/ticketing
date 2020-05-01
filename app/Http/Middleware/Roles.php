<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class Roles
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
        $id = auth()->user()->id;
        $user = User::find($id);
        foreach ($user->roles as $role)
            if ($role->name == 'Admin') {
                return $next($request);
            } elseif ($role->name == 'User' || $role->name == 'BoxOffice') {
                return redirect()->route('profile');
            }
        abort(403);
    }
}
