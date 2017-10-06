<?php
namespace App\Http\Middleware;
use Closure;

class CheckWords
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
        if (strpos($request->content, 'hate') || strpos($request->content, 'idiot') || strpos($request->content, 'stupid')) {
            return response(view('auth.forbidden-rude-words'));
        }
        return $next($request);
    }
}