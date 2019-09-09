<?php
namespace App\Providers;
use App\drop; // write model name here 
use Illuminate\Support\ServiceProvider;
class dynamicClassname extends ServiceProvider
{
    public function boot()
    
        {
        	view()->composer('*',function($view){
            $view->with('classname_array', drop::all());
        });
    
 
}
}