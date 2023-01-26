<?php

namespace App\Http\Middleware;

use App\role;
use Closure;
use Illuminate\Support\Facades\Auth;

class userIsAdmin
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

        $user = Auth::user();
        $roles = $user->roles;
        // dd($roles);
        foreach($roles as $role){
if($role->role == 'admin'){
    return $next($request);
}

        }
        return redirect(route('home'));
    }
}
