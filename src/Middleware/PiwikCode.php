<?php

namespace App\Http\Middleware;

use Closure;

class PiwikCode
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
        $code = config('piwik.code');
        $outputCode = str_replace([
            '{{HOST}}',
            '{{SITEID}}'
        ], [
            config('piwik.host'),
            config('piwik.siteId')
        ], $code);
        $response = $next($request);
        $response->setContent(str_replace('</body>', $outputCode.'</body>',$response->original));
        return $response;
    }
}
