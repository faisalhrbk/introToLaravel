<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    {
        // yaha middleaer ka logic likhtein hein
        // echo "echo from middleware Age check";
        // echo"<br>";
        // if ($request->age < 18) {
        //     die(" not allowed!!you are younger than 18");
        // }
        // print_r($request->age);

        //  grouping of middleswawre

        echo "age check middleware";
        // if($request->age <= 18){
        //     die("not allowed to hunza!!you are younger than 18<br>");
        // }
        return $next($request);
    }
}
