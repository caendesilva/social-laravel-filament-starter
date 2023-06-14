<?php

/**
 * Config for DutchCodingCompany/FilamentSocialite
 */
return [

    // Allow login, and registration if enabled, for users with an email for one of the following domains.
    // All domains are allowed by default. Only use lower case values.
    'domain_allowlist' => [],

    // Allow registration through socials
    'registration' => true,

    // Specify the providers that should be visible on the login.
    // These should match the Socialite providers you have set up in your services.php config.
    // Uses Blade UI icons, for example: https://github.com/owenvoke/blade-fontawesome,
    // or simply provide any Blade view key for the Filament button component to use.
    // You can also specify any of the colors from the Filament color palette.
    'providers' => [
        //        'gitlab' => [
        //            'label' => 'GitLab',
        //            'icon' => 'fab-gitlab',
        //            'color' => 'secondary'
        //        ],
        //        'github' => [
        //            'label' => 'GitHub',
        //            'icon' => 'fab-github',
        //            'color' => 'secondary'
        //        ],
    ],

    // Specify the application's user model
    'user_model' => \App\Models\User::class,

    // Specify the default redirect route for successful logins
    'login_redirect_route' => 'filament.pages.dashboard',

    // Specify the route name for the socialite login page
    'login_page_route' => 'filament.auth.login',

];
