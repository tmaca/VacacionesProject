<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use App\Mes;
use Illuminate\Support\Facades\Input;

class peticionMes
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
        $mes=Input::get("mes");
        $id=Mes::where('mes', '=',$request->input('mes'));

        if ($id == $mes){

            //Input::get('id');

            return $next($request);

        }else{
            return redirect('noTieneVacaciones');
        }
    }
}
