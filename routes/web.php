<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('index');
});
$router->get('/api/whoami', function (Request $request) use ($router) {
  return response()->json(['ipaddress' => $request->ip(), 'language' => $request->header('Accept-Language'),'software'=>$request->header('User-Agent')]);
});
