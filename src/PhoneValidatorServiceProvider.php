<?php

namespace Fixik\Validator;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class PhoneValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('phone', '\Fixik\Validation\PhoneValidation@validate');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PhoneValidator::class, function () {
            return new PhoneValidator();
        });
    }
}
