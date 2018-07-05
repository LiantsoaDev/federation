<?php

namespace App\Http\Middleware;

use Closure;

class VerifyTypePost
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
        if( $request->route('type') == 'blog-postv1' || $request->route('type') == 'blog-postv2'  )
            return $next($request);
        else
            return redirect()->route('error.errorpage');
    }
}
