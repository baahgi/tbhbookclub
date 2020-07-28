<?php

namespace App\Providers;

use App\Course;
use App\Program;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.components.programs.list', function ($view) {
            $view->with('programs', Program::all());
        });

        View::composer('layouts.components.courses.*', function ($view) {
            $view->with('courses', Course::where('visibility', 1)
                    ->orderBy('created_at', 'desc')
                    ->get()
                    ->take(12));
        });
    }
}
