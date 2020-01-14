<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Sistema Tenda',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>SIS</b>TENDA',

    'logo_mini' => '<b>A</b>LT',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */
    'menu' => [
        [
            'search' => true,
            'href' => 'test',  //form action
            'method' => 'POST', //form method
            'input_name' => 'menu-search-input', //input name
            'text' => 'Busca', //input placeholder
            'role' => 'admin'
        ],
        [
            'text' => 'Controle Colégio',
            'icon' => 'graduation-cap',
            'role' => 'admin',
            'icon_color' => 'red',
            'submenu' => [
                [
                    'text'        => 'Cursos',
                    'url'         => 'cursos',
                    'icon'        => 'book',
                    'label_color' => 'success',
                    'role'        => 'admin',
                ],
                [
                    'text'        => 'Turmas',
                    'url'         => 'turmas',
                    'icon'        => 'book',
                    'label_color' => 'success',
                    'role'        => 'admin',
                ],
                [
                    'text'        => 'Alunos',
                    'url'         => 'alunos',
                    'icon'        => 'user',
                    'label_color' => 'success',
                    'role'        => 'admin',
                ],
                [
                    'text'        => 'Professores',
                    'url'         => 'professores',
                    'icon'        => 'book',
                    'label_color' => 'success',
                    'role'        => 'admin',
                ],
                [
                    'text'        => 'Frequencia',
                    'url'         => 'frequenciasColegio',
                    'icon'        => 'book',
                    'label_color' => 'success',
                    'role'        => 'admin',
                ]   
            ]
        ],
        [
            'text' => 'Controle Tenda',
            'icon' => 'university',
            'role' => 'admin',
            'submenu' => [
                [
                    'text'        => 'Membros',
                    'url'         => 'membros',
                    'icon'        => 'users',
                    'label_color' => 'success',
                    'role'        => 'admin',
                ],
                [
                    'text'        => 'Frequencia',
                    'url'         => 'frequenciasTenda',
                    'icon'        => 'calendar',
                    'label_color' => 'success',
                    'role'        => 'admin',
                ],
                [
                    'text'        => 'Grupos de Limpeza',
                    'url'         => 'gruposLimpeza',
                    'icon'        => 'calendar',
                    'label_color' => 'success',
                    'role'        => 'admin',
                ]
            ]
        ],
        [
            'text'        => 'Estoque',
            'url'         => 'estoque',
            'icon'        => 'calendar',
            'label_color' => 'success',
            'url'         => 'estoque',
            'role'        => 'admin'
        ],
        [
            'text'        => 'Agenda',
            'url'         => 'agenda',
            'icon'        => 'calendar',
            'label_color' => 'success',
            'role'        => 'admin',
        ],
        [
            'text' => 'Financeiro',
            'icon' => 'money',
            'url'  => 'financeiro',
            'role' => 'admin',
            'submenu' => [
                [
                    'text' => 'Entradas',
                    'url'  => 'entradasFinanceiro',
                    'role' => 'admin',
                ],
                [
                    'text' => 'Saidas',
                    'url' => 'saidasFinanceiro',
                    'role' => 'admin',
                ]
            ]
        ],
        [   
            'text' => 'Frente de Caixa',
            'icon' => 'dollar text-green',
            'label_color' => 'success',
            'role'        => 'admin',
        ],
        [   
            'text' => 'Configurações',
            'icon' => 'dollar text-green',
            'label_color' => 'success',
            'role'        => 'admin',
            'submenu' => [
                [
                    'text' => 'usuários',
                    'url' => 'usuarios',
                    'role'  => 'admin',
                ]
            ]
        ]                 
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        tenda\Menu\DynamicMenu::class
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [        
        [
            'name' => 'Moment',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js'
                ]
            ],
        ],
        [
            'name' => 'TypeAhead',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"
                ]
            ],
        ],
        [
            'name' => 'FullCalendar',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js'
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css'
                ],
            ],
        ],
    ],
];
