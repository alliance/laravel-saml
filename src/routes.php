<?php

/**
 * The laravel-saml package route configuration
 */

Route::group([
        'namespace' => '\Alliance\LaravelSaml\Http\Controllers'
    ], function () {
        Route::get('/saml/idp/metadata', 'SamlIdpController@metadata')->name('saml.idp.metadata');
    }
);

