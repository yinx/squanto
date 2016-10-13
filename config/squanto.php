<?php

return [

    /**
     * Allowed locales to be managed
     * @var array
     */
    'locales' => ['en','nl'],

    /**
     * Exclude following lang groups from import
     * Here you list all translations that should be maintained by the developer
     * @var array
     */
//    'excluded_files' => ['auth','pagination','passwords','validation','app'],
    'excluded_files' => ['app'],

    /**
     * Path where the cached language files should be stored
     * @var string
     */
    'cache_path' => storage_path('app/lang'),

    /**
     * Path where the laravel language files are stored
     * @var string
     */
    'lang_path' => null,

    /**
     * In case the translation key cannot be translated, this option
     * allows to display null instead of the key itself. This differs
     * from native Laravel behaviour where always the key is returned.
     */
    'key_as_default' => true,

];