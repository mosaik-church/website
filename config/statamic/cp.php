<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Control Panel
    |--------------------------------------------------------------------------
    |
    | Whether the Control Panel should be enabled, and through what route.
    |
    */

    'enabled' => env('CP_ENABLED', true),

    'route' => env('CP_ROUTE', 'cp'),

    /*
    |--------------------------------------------------------------------------
    | Start Page
    |--------------------------------------------------------------------------
    |
    | When a user logs into the Control Panel, they will be taken here.
    | For example: "dashboard", "collections/pages", etc.
    |
    */

    'start_page' => 'dashboard',

    /*
    |--------------------------------------------------------------------------
    | Dashboard Widgets
    |--------------------------------------------------------------------------
    |
    | Here you may define any number of dashboard widgets. You're free to
    | use the same widget multiple times in different configurations.
    |
    */

    'widgets' => [
        [
            'type' => 'collection',
            'collection' => 'podcasts',
            'limit' => 4,
        ],
	[
            'type' => 'collection',
            'collection' => 'blog',
            'limit' => 4,
        ],
        [
            'type' => 'form',
            'form' => 'contact',
            'limit' => 5,
            'title' => 'Kontaktformular',
            'fields' => [
                'name',
                'email',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Date Format
    |--------------------------------------------------------------------------
    |
    | When a date is encountered throughout the Control Panel, it will be
    | rendered in the following format. Any PHP date variables are permitted.
    |
    */

    'date_format' => 'Y/n/d',

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    | The numbers of items to show on each paginated page.
    |
    */

    'pagination_size' => 50,

    /*
    |--------------------------------------------------------------------------
    | Links to Documentation
    |--------------------------------------------------------------------------
    |
    | Show contextual links to documentation throughout the Control Panel.
    |
    */

    'link_to_docs' => false,

];
