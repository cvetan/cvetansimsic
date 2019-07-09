<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
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
        Form::component('bsText', 'components.form.bstext', ['name', 'label', 'id']);
        Form::component('bsSwitchery', 'components.form.bsswitchery', ['name', 'label', 'id', 'color' => '#167CCB']);
    }
}
