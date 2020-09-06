<?php

namespace App\Main\Http\Middleware;

use App\Main\Services\BindEntityService;
use Closure;
use LaravelDoctrine\ORM\Facades\EntityManager;

class BindEntity
{

    protected BindEntityService $bindEntityService;

    /**
     * BindEntity constructor.
     * @param BindEntityService $bindEntityService
     */
    public function __construct(BindEntityService $bindEntityService)
    {
        $this->bindEntityService = $bindEntityService;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->bindEntityService->bindEntityDoctrine($request);
        return $next($request);
    }

}
