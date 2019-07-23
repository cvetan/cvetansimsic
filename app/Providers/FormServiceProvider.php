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
        Form::component('bsText', 'components.form.bs_text', ['name', 'label', 'id', 'value' => null]);
        Form::component('bsTextarea', 'components.form.bs_textarea', ['name', 'label', 'id', 'value' => null]);
        Form::component('bsSwitchery', 'components.form.bs_switchery', ['name', 'label', 'id', 'color' => '#167CCB', 'checked']);
        Form::component('bsCkeditor', 'components.form.bs_ckeditor', ['name', 'label', 'id', 'value' => null]);
    }
}
