<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        /**
         * kind of state magamen by crating the global state so that all the people can 
         * use this global element 
         */

        
        view()
            ->share("name","yeswanth_1");
        view()
            ->share("student_1",["name"=>"student-1","age"=>20]);
        view()
            ->share("student_2",["name"=>"student-2","age"=>21]);
        view()
            ->share("student_3",["name"=>"student-3","age"=>23]);
    }
}
