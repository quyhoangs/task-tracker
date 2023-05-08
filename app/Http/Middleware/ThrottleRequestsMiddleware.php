<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

class ThrottleRequestsMiddleware
{
    protected $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function handle(Request $request, Closure $next, $maxAttempts = 3, $decaySeconds = 60){

        $key = $this->resolveRequestSignature($request);

        if ($this->limiter->tooManyAttempts($key, $maxAttempts, $decaySeconds)) {
            $retryAfter = $this->limiter->availableIn($key);
            $response = response()->json([
                'message' => 'Too many attempts, please try again in '.$retryAfter.' seconds.',
            ], 429);
            $response->headers->add([
                'Retry-After' => $retryAfter,
            ]);
            return $response;
        }

        $this->limiter->hit($key, $decaySeconds);

        $response = $next($request);

        return $this->addHeaders(
            $response,
            $maxAttempts,
            $this->calculateRemainingAttempts($key, $maxAttempts),
            $this->limiter->availableIn($key)
        );
}


    protected function resolveRequestSignature(Request $request)
    {
        return sha1(
            $request->method() .
            '|' . $request->server('SERVER_NAME') .
            '|' . $request->path() .
            '|' . $request->ip()
        );
    }

    protected function calculateRemainingAttempts($key, $maxAttempts)
    {
        $attempts = $this->limiter->attempts($key);
        return $maxAttempts - $attempts > 0 ? $maxAttempts - $attempts : 0;
    }

    protected function addHeaders(Response $response, $maxAttempts, $remainingAttempts, $retryAfter)
    {
        $response->headers->add([
            'X-RateLimit-Limit' => $maxAttempts,
            'X-RateLimit-Remaining' => $remainingAttempts,
            'X-RateLimit-Reset' => time() + $retryAfter,
        ]);

        return $response;
    }
}
