<?php

namespace Config;

/**
 * Class Config\Main
 *
 * Here can be placed main settings
 *
 */
class Main
{
    /**
     * The list of routes
     *
     * At this moment the second item
     * of the value of the array item is used as an example
     *
     * @var array
     */
    const ROUTES = [
        "/^\/customer\/?(.+)/" => ['App\Controllers\Customer', 'action'],
        "/^\/order\/?(.+)/" => ['App\Controllers\Order', 'action'],
        "/^\/revenue\/?(.+)/" => ['App\Controllers\Revenue', 'action']
    ];

    /**
     *
     * The route of the home page
     *
     * @var array
     */
    const ROOT = ['App\Controllers\Home', 'action'];

    const ERRORS_LEVEL = E_ALL;
    const ERROR_HANDLER = 'App\Error::errorHandler';
    const EXCEPTION_HANDLER = 'App\Error::exceptionHandler';
}
