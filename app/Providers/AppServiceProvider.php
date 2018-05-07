<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use App\Question;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::directive('hashtag', function ($string){

if (!function_exists('convertHashtags')) {
    function convertHashtags($str) {
        $regex = "/#+([a-zA-Z0-9_]+)/";
        $str = preg_replace($regex, "<a href='/home'>#$1</a>", $str);
        return($str);
            }
        }
            $string = convertHashtags("#Laravel is a web application framework with expressive, elegant syntax. We believe #development must be an enjoyable, creative experience to be truly fulfilling. #Laravel attempts to take the pain out of #development by easing common tasks used in most web projects, such as authentication, routing, sessions, and caching.
#Laravel aims to make the #development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.
#Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.
");


       return $string;


    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
