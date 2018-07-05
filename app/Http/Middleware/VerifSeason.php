<?php

namespace App\Http\Middleware;

use App\Saison;
use Closure;

class VerifSeason
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
        if( $data = Saison::where('saison',$request->route('saison'))->first() )
        {
            $saison_input = $data->saison;
            $request->attributes->add(['saison' => $saison_input ]);
            return $next($request);
        }
        else
            return redirect()->route('show.event');
    }
}
