<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * this is Route::get('',fn) ==> this is just defining the route 
 * 
 * we can also name the route for the global usage 
 * 
 * naming the route is like registering the route 
 * 
 * name we can give any this for our convinience bcs it's internal and not visible 
 * so we can use it internally in the application 
 * 
 * but route defining is visible explicitly 
 */

Route::get('/home', function () {
    return view('home');
})->name('home');



Route::get('/welcome/{name}',function($name){

    /**
     * as views are stored in the views folder this is the folder for view in mvc
     * 
     * which keeps all the view files
     * 
     * if you want to render the view file in the view folder we use return view('filename') fun
     */

    return view('welcome',compact('name'));
});


Route::get('/welcome',function(){
    return view('welcome');
});


Route::get('/response',function(){
    return response()
        ->json(["msg"=>"Hello i'm setting the cookies"])
        -> header('my-header','LaravelHeader')
        ->cookie('name-cookie','value',60);
});


Route::get('/user-info',function(){
    return response()
        ->json(["name"=>"jhon","age"=>26]);
});


Route::get('/old-route',function(){
    return redirect('/new-route');
});

Route::get('/new-route',function(){
    return "This is new Route and you may have been redirected from old-route";
});

/**
 * same but this is explicit redirecting by using and specifiy the name of the route by using route name
 * using route function 
 */


Route::get('/dashboard', function () {
    return "Welcome to Dashboard!";
})->name('dashboard');

Route::get('/redirect-dashboard', function () {
    return redirect()->route('dashboard');
});


Route::get('/primes/{range}',function($range){
    $payload = ["primes"=>[]];
    for ($it=2; $it<=$range; ++$it){
        $isprime = true;
        for ($i=2; $i<=$it/2; ++$i){
            if ($it%$i==0){
                $isprime = false;
                break;
            }
        }
        if ($isprime==true) array_push($payload['primes'],$it);
    }
    return response()
        ->json(["msg"=>$payload]);
});

