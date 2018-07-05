<?php

namespace App\Http\Middleware;

use Closure;
use App\Article;

class Verifyarticle
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
        $id = $request->route('id');
        $article = new Article();
        $listsarticles = $article->getarticlebyid($id);
        if( !is_null($listsarticles->id) ){
            $request->attributes->add(['articles' => $listsarticles ]);
            return $next($request);  
        }
    }
}
